/*
 * validate.js 1.4
 * Copyright (c) 2011 - 2014 Rick Harrison, http://rickharrison.me
 * validate.js is open sourced under the MIT license.
 * Portions of validate.js are inspired by CodeIgniter.
 * http://rickharrison.github.com/validate.js
 */
!function(a,b,c){var d={messages:{required:"The %s field is required.",matches:"The %s field does not match the %s field.","default":"The %s field is still set to default, please change.",valid_email:"The %s field must contain a valid email address.",valid_emails:"The %s field must contain all valid email addresses.",min_length:"The %s field must be at least %s characters in length.",max_length:"The %s field must not exceed %s characters in length.",exact_length:"The %s field must be exactly %s characters in length.",greater_than:"The %s field must contain a number greater than %s.",less_than:"The %s field must contain a number less than %s.",alpha:"The %s field must only contain alphabetical characters.",alpha_numeric:"The %s field must only contain alpha-numeric characters.",alpha_dash:"The %s field must only contain alpha-numeric characters, underscores, and dashes.",numeric:"The %s field must contain only numbers.",integer:"The %s field must contain an integer.",decimal:"The %s field must contain a decimal number.",is_natural:"The %s field must contain only positive numbers.",is_natural_no_zero:"The %s field must contain a number greater than zero.",valid_ip:"The %s field must contain a valid IP.",valid_base64:"The %s field must contain a base64 string.",valid_credit_card:"The %s field must contain a valid credit card number.",is_file_type:"The %s field must contain only %s files.",valid_url:"The %s field must contain a valid URL."},callback:function(){}},e=/^(.+?)\[(.+)\]$/,f=/^[0-9]+$/,g=/^\-?[0-9]+$/,h=/^\-?[0-9]*\.?[0-9]+$/,i=/^[a-zA-Z0-9.!#$%&amp;'*+\-\/=?\^_`{|}~\-]+@[a-zA-Z0-9\-]+(?:\.[a-zA-Z0-9\-]+)*$/,j=/^[a-z]+$/i,k=/^[a-z0-9]+$/i,l=/^[a-z0-9_\-]+$/i,m=/^[0-9]+$/i,n=/^[1-9][0-9]*$/i,o=/^((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})$/i,p=/[^a-zA-Z0-9\/\+=]/i,q=/^[\d\-\s]+$/,r=/^((http|https):\/\/(\w+:{0,1}\w*@)?(\S+)|)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,s=function(a,b,e){this.callback=e||d.callback,this.errors=[],this.fields={},this.form=this._formByNameOrNode(a)||{},this.messages={},this.handlers={},this.conditionals={};for(var f=0,g=b.length;g>f;f++){var h=b[f];if((h.name||h.names)&&h.rules)if(h.names)for(var i=0,j=h.names.length;j>i;i++)this._addField(h,h.names[i]);else this._addField(h,h.name)}var k=this.form.onsubmit;this.form.onsubmit=function(a){return function(b){try{return a._validateForm(b)&&(k===c||k())}catch(d){}}}(this)},t=function(a,b){var c;{if(!(a.length>0)||"radio"!==a[0].type&&"checkbox"!==a[0].type)return a[b];for(c=0,elementLength=a.length;elementLength>c;c++)if(a[c].checked)return a[c][b]}};s.prototype.setMessage=function(a,b){return this.messages[a]=b,this},s.prototype.registerCallback=function(a,b){return a&&"string"==typeof a&&b&&"function"==typeof b&&(this.handlers[a]=b),this},s.prototype.registerConditional=function(a,b){return a&&"string"==typeof a&&b&&"function"==typeof b&&(this.conditionals[a]=b),this},s.prototype._formByNameOrNode=function(a){return"object"==typeof a?a:b.forms[a]},s.prototype._addField=function(a,b){this.fields[b]={name:b,display:a.display||b,rules:a.rules,depends:a.depends,id:null,type:null,value:null,checked:null}},s.prototype._validateForm=function(a){this.errors=[];for(var b in this.fields)if(this.fields.hasOwnProperty(b)){var d=this.fields[b]||{},e=this.form[d.name];e&&e!==c&&(d.id=t(e,"id"),d.type=e.length>0?e[0].type:e.type,d.value=t(e,"value"),d.checked=t(e,"checked"),d.depends&&"function"==typeof d.depends?d.depends.call(this,d)&&this._validateField(d):d.depends&&"string"==typeof d.depends&&this.conditionals[d.depends]?this.conditionals[d.depends].call(this,d)&&this._validateField(d):this._validateField(d))}return"function"==typeof this.callback&&this.callback(this.errors,a),this.errors.length>0&&(a&&a.preventDefault?a.preventDefault():event&&(event.returnValue=!1)),!0},s.prototype._validateField=function(a){for(var b=a.rules.split("|"),f=a.rules.indexOf("required"),g=!a.value||""===a.value||a.value===c,h=0,i=b.length;i>h;h++){var j=b[h],k=null,l=!1,m=e.exec(j);if((-1!==f||-1!==j.indexOf("!callback_")||!g)&&(m&&(j=m[1],k=m[2]),"!"===j.charAt(0)&&(j=j.substring(1,j.length)),"function"==typeof this._hooks[j]?this._hooks[j].apply(this,[a,k])||(l=!0):"callback_"===j.substring(0,9)&&(j=j.substring(9,j.length),"function"==typeof this.handlers[j]&&this.handlers[j].apply(this,[a.value,k])===!1&&(l=!0)),l)){var n=this.messages[a.name+"."+j]||this.messages[j]||d.messages[j],o="An error has occurred with the "+a.display+" field.";n&&(o=n.replace("%s",a.display),k&&(o=o.replace("%s",this.fields[k]?this.fields[k].display:k))),this.errors.push({id:a.id,name:a.name,message:o,rule:j});break}}},s.prototype._hooks={required:function(a){var b=a.value;return"checkbox"===a.type||"radio"===a.type?a.checked===!0:null!==b&&""!==b},"default":function(a,b){return a.value!==b},matches:function(a,b){var c=this.form[b];return c?a.value===c.value:!1},valid_email:function(a){return i.test(a.value)},valid_emails:function(a){for(var b=a.value.split(","),c=0,d=b.length;d>c;c++)if(!i.test(b[c]))return!1;return!0},min_length:function(a,b){return f.test(b)?a.value.length>=parseInt(b,10):!1},max_length:function(a,b){return f.test(b)?a.value.length<=parseInt(b,10):!1},exact_length:function(a,b){return f.test(b)?a.value.length===parseInt(b,10):!1},greater_than:function(a,b){return h.test(a.value)?parseFloat(a.value)>parseFloat(b):!1},less_than:function(a,b){return h.test(a.value)?parseFloat(a.value)<parseFloat(b):!1},alpha:function(a){return j.test(a.value)},alpha_numeric:function(a){return k.test(a.value)},alpha_dash:function(a){return l.test(a.value)},numeric:function(a){return f.test(a.value)},integer:function(a){return g.test(a.value)},decimal:function(a){return h.test(a.value)},is_natural:function(a){return m.test(a.value)},is_natural_no_zero:function(a){return n.test(a.value)},valid_ip:function(a){return o.test(a.value)},valid_base64:function(a){return p.test(a.value)},valid_url:function(a){return r.test(a.value)},valid_credit_card:function(a){if(!q.test(a.value))return!1;for(var b=0,c=0,d=!1,e=a.value.replace(/\D/g,""),f=e.length-1;f>=0;f--){var g=e.charAt(f);c=parseInt(g,10),d&&(c*=2)>9&&(c-=9),b+=c,d=!d}return 0===b%10},is_file_type:function(a,b){if("file"!==a.type)return!0;var c=a.value.substr(a.value.lastIndexOf(".")+1),d=b.split(","),e=!1,f=0,g=d.length;for(f;g>f;f++)c==d[f]&&(e=!0);return e}},a.FormValidator=s}(window,document);

/*
 * CIS Form Plugin
 */
(function(window, undefined) {
    'use strict';

    var // Localise globals
        document = window.document,
        $ = window.$,
        CIS = window.CIS = window.CIS || {};

    CIS.Form = CIS.Form || {
        /**
         * Validate form fields
         * formName: form name
         * rules: [{ name: 'field-name', display: 'Field name', rules: '...' }, {} ]
         */
        validation: function(formName, rules) {
            new FormValidator(formName, rules, function(errors, event) {
                // Remove all previous errors
                var $form = $('form[name="' + formName + '"]');
                $form.find('.alert').remove();
                $form.find('.form-group.has-error')
                    .find('.help-block').remove().end()
                    .removeClass('has-error');

                if (errors.length > 0) {
                    // Show error in Bootstrap style
                    // <div class="form-group has-error"><input><p class="help-block">Error message</p></div>
                    for (var i = 0; i < errors.length; i++) {
                        var error = errors[i],
                            message = error.message.charAt(0).toUpperCase() + error.message.slice(1);
                        $('#' + error.id)
                            .after('<p class="help-block">' + message + '</p>')
                                .closest('.form-group').addClass('has-error');
                    }

                    // Prevent form from submitting
                    event.stopPropagation();
                }
            });
        },
        /**
         * Show message on top of the form
         */
        showMessage: function($form, message, isError) {
            isError = isError || false;
            message = (isError) ?
                '<div class="alert alert-danger">' + message + '</div>' :
                '<div class="alert alert-success">' + message + '</div>';
            $form.prepend(message);
        }
    };
})(window);