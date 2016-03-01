$(function() {
    /* Loading block */
    window.showLoadingBlock = function () {
        /* Set up loading */
        $.blockUI({ css: {
            border: "none",
            padding: "25px 15px",
            backgroundColor: "#000",
            "-webkit-border-radius": "10px",
            "-moz-border-radius": "10px",
            "font-size": "40px",
            opacity: .5,
            color: "#fff",
        }});
    };
    window.hideLoadingBlock = $.unblockUI;
    /* Display Message */
    window.showMessage = function (msg, type) {
        /* Check if message is error */
        var isError = typeof(type) != 'undefined' && type == 'error';
        /* Set up message */
        swal((isError ? 'Error !' : 'Success !'), msg, (isError ? 'error' : 'success'));
    };
    /* Confirm Messages */
    window.confirmMessage = function (msg, confirmButton, callback, confirmButtonColor) {
        /* Show confirm dialog */
        swal({
            title: "Are you sure?",
            text: msg,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: (typeof(confirmButtonColor) != 'undefined' && confirmButtonColor ? confirmButtonColor : '#DD6B55'),
            confirmButtonText: (typeof(confirmButton) != 'undefined' && confirmButton ? confirmButton : 'Yes, discard them!'),
            closeOnConfirm: true
        }, callback);
    };
    /* Show messages from model */
    window.showMessagesFromModel = function (messages) {
        /* Set default messages */
        var $messages = [];
        /* Parse each message */
        for (var i in messages) if (typeof(messages[i][0]) == 'string' && messages[i][0].length > 1) {
            $messages.push(messages[i][0]);
        }
        /* Check if there are messages display them */
        if ($messages.length) {
            showMessage($messages.join("<br /><br />"), 'error');
        }
    };
    /* Image Uploader */
    (function() {
        var $uploadedFiles = $('#uploaded-files'), $fileUploader = $('#file-uploader');
        if ($fileUploader.length) {
            var uploaderOptions = $.extend({ url: "/upload/image", paramName: 'image', previewTemplate: '<div></div>' }, $fileUploader.data());
            var fileUploader = new Dropzone($fileUploader[0], uploaderOptions);
            fileUploader.on('sending', function(File, _XMLHttpRequest, FormData) {
                FormData.append('model', $fileUploader.data('model') || '');
                FormData.append('_token', $fileUploader.data('token') || '');
            });
            fileUploader.on('addedfile', showLoadingBlock);
            fileUploader.on('complete', function (File) {
                var response;

                try {
                    response = $.parseJSON(File.xhr.responseText);
                }
                catch (e) {}

                if (File.status == 'error') {
                    if (response) {
                        showMessagesFromModel(response);
                    }
                    else {
                        showMessage(File.xhr.statusText, 'error');
                    }
                }
                else if (File.status == 'success') {
                    $uploadedFiles.append(tmpl($fileUploader.data('fileTemplate'), response));
                }
            });
            fileUploader.on('queuecomplete', hideLoadingBlock);
            /* Update file uploader limit */
            (window.updateFileUploaderLimit = function () {
                var limitFiles = $fileUploader.data('limit'), totalFiles = $uploadedFiles.children().length;

                if ( ! isNaN(limitFiles) && limitFiles) {
                    fileUploader.options.maxFiles = limitFiles - totalFiles;
                    fileUploader._updateMaxFilesReachedClass();
                }
            })();
            /* Delete thumbinail from uploaded files */
            $uploadedFiles.on('click', '[data-action="delete-file"]', function () {
                confirmMessage("You want to delete this file ?", "Yes, delete it !", function () {
                    $(this).closest('li').remove();
                    updateFileUploaderLimit();
                }.bind(this));
            });
        }
    })();
    (function () {
        /* Change listing status from listing list */
        $('[data-action="change-listing-status"]').on('change', function () {
            window.showLoadingBlock();

            $.get(window.location.href, $(this), function (response) {
                window.hideLoadingBlock();
            }, 'json');
        });
        /* Change broker on listing page */
        $('[data-field="contact-broker"]').on('change', function () {
            var $this = $(this).find('option:selected');

            if ($this.data('phone') || $this.data('email')) {
                $('[name="phone"]').val($this.data('phone'));
                $('[name="phone2"]').val($this.data('phone2'));
                $('[name="email"]').val($this.data('email'));
            }
        });
        /* Delete item from admin */
        $('[data-action="delete-item"]').on('click', function (e) {
            window.confirmMessage("Are you sure you want to delete it ?", "Yes, Delete it !", function () {
                $(this).closest('form').submit();
            }.bind(this));

            e.preventDefault();
        });
    })();
    /* Set up ckeditor */
    if (typeof CKEDITOR != 'undefined') {
        CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
        CKEDITOR.config.shiftEnterMode = CKEDITOR.ENTER_BR;
        CKEDITOR.config.autoParagraph = false;
    }
});