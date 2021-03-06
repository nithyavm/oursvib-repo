(function($) {

    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
             element.before(error); 
        },
        rules: {
            first_name : {
                required: true,
            },
            last_name : {
                required: true,
            },
            user_name : {
                required: true,
            },
            password : {
                required: true,
            },
            email : {
                required: true,
            },
            phone : {
                required: true,
            },
            address: {
                required: true,
            },
            employee_id : {
                required: true,
            },
            designation: {
                required: true,
            },
            department: {
                required: true,
            },
            work_hours: {
                required: true,
            },
            bank_name: {
                required: true,
            },
            holder_name: {
                required: true,
            },
            card_number: {
                required: true,
                number: true,
            },
            cvc: {
                required: true,
            },
        },
        onfocusout: function(element) {
            $(element).valid();
        },
        highlight : function(element, errorClass, validClass) {
            $(element.form).find('.actions').addClass('form-error');
            $(element).removeClass('valid');
            $(element).addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element.form).find('.actions').removeClass('form-error');
            $(element).removeClass('error');
            $(element).addClass('valid');
        }
    });
    var is_async_step = false;
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous : 'Previous',
            next : 'Next',
            finish : 'Submit',
            current : ''
        },
        titleTemplate : '<span class="title">#title#</span>',
        onStepChanging: function (event, currentIndex, newIndex)
        {
           
            if (currentIndex == 0) var tabpanel ='#tab_details';
            if (currentIndex == 1) var tabpanel ='#tab_additional';
            if (currentIndex == 2) var tabpanel ='#tab_activity';
            if (currentIndex == 3) var tabpanel ='#tab_package';
            if (currentIndex == 5) var tabpanel ='#tab_ammenities';

            if (currentIndex > newIndex)
                return true
            else {
                if (is_async_step) {
                    is_async_step = false;
                    //ALLOW NEXT STEP
                    return true;
                }
                var actionUrl=$("#signup-form").attr('action');              
                var formData = $(tabpanel).find('select, textarea, input, input:checkbox, input:radio').serialize() // Gets the data from the form fields
                $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: formData,  
                        beforeSend: function(){
                            //alert(actionUrl)
                            $("#overlay").show();
                        },
                        success: function (data) { 
                          //  alert("sucess")                                                
                            is_async_step = true;                            
                            $(form).steps("next");
                        },
                        complete:function(data){
                            /* Hide image container */
                            $("#overlay").hide();
                        },                        
                        error: function (data) {
                            return false;
                        }
                });
            }
            
            
			
		
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("submitted")
           form.submit();
        },
        // onInit : function (event, currentIndex) {
        //     event.append('demo');
        // }
    });

    function savetab(actionUrl,formData) {
        

    }

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

    $('#gender').parent().append('<ul class="list-item" id="newgender" name="gender"></ul>');
    $('#gender option').each(function(){
        $('#newgender').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#gender').remove();
    $('#newgender').attr('id', 'gender');
    $('#gender li').first().addClass('init');
    $("#gender").on("click", ".init", function() {
        $(this).closest("#gender").children('li:not(.init)').toggle();
    });
    
    var allOptions = $("#gender").children('li:not(.init)');
    $("#gender").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#gender").children('.init').html($(this).html());
        allOptions.toggle();
    });

    $('#country').parent().append('<ul class="list-item" id="newcountry" name="country"></ul>');
    $('#country option').each(function(){
        $('#newcountry').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#country').remove();
    $('#newcountry').attr('id', 'country');
    $('#country li').first().addClass('init');
    $("#country").on("click", ".init", function() {
        $(this).closest("#country").children('li:not(.init)').toggle();
    });
    
    var CountryOptions = $("#country").children('li:not(.init)');
    $("#country").on("click", "li:not(.init)", function() {
        CountryOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#country").children('.init').html($(this).html());
        CountryOptions.toggle();
    });

    $('#payment_type').parent().append('<ul  class="list-item" id="newpayment_type" name="payment_type"></ul>');
    $('#payment_type option').each(function(){
        $('#newpayment_type').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#payment_type').remove();
    $('#newpayment_type').attr('id', 'payment_type');
    $('#payment_type li').first().addClass('init');
    $("#payment_type").on("click", ".init", function() {
        $(this).closest("#payment_type").children('li:not(.init)').toggle();
    });
    
    var PaymentsOptions = $("#payment_type").children('li:not(.init)');
    $("#payment_type").on("click", "li:not(.init)", function() {
        PaymentsOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#payment_type").children('.init').html($(this).html());
        PaymentsOptions.toggle();
    });

    $.dobPicker({
        daySelector: '#birth_date',
        monthSelector: '#birth_month',
        yearSelector: '#birth_year',
        dayDefault: 'Day',
        monthDefault: 'Month',
        yearDefault: 'Year',
        minimumAge: 0,
        maximumAge: 120
    });

    $.dobPicker({
        daySelector: '#expiry_date',
        monthSelector: '#expiry_month',
        yearSelector: '#expiry_year',
        dayDefault: 'Day',
        monthDefault: 'Month',
        yearDefault: 'Year',
        minimumAge: 0,
        maximumAge: 120
    });
        
})(jQuery);