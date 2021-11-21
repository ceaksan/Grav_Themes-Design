---
title: Other
heading: F.A.Q.
accordion:
    -
        title: 'How to download and register?'
        description: 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
    -
        title: 'How to create your paypal account?'
        description: 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
    -
        title: 'How to link your paypal and bank account?'
        description: 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.'
    -
        title: 'How to download and register?'
        description: 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
    -
        title: 'How to create your paypal account?'
        description: 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
    -
        title: 'How to link your paypal and bank account?'
        description: 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.'
never_cache_twig: true
form:
    name: contact
    classes: 'contact-form bg-white p-3'
    refresh_prevention: true

    fields:
        fullname:
            type: fieldset
            classes: 'row'
            fields:
                row-1-1:
                    type: fieldset
                    classes: 'col-md-6'
                    fields:
                        firstname: { name: firstname, id: firstname, label: 'First Name', classes: 'form-control', outerclasses: form-group, labelclasses: text-black, outerclasses: form-group, type: text, validate: { required: true } }
                row-1-2:
                    type: fieldset
                    classes: 'col-md-6'
                    fields:
                        lastname: { name: lastname, id: lastname, label: 'Last Name', classes: 'form-control', outerclasses: form-group, labelclasses: text-black, outerclasses: form-group, type: text, validate: { required: true } }

        email:
            label: 'E-mail'
            placeholder: ''
            classes: 'form-control'
            labelclasses: text-black
            outerclasses: form-group
            type: email
            validate:
                required: true

        message:
            label: Message
            classes: 'form-control'
            labelclasses: text-black
            outerclasses: form-group
            placeholder: ''
            type: textarea
            size: long
            validate:
                required: true

        term:
            label: 'Accept terms and conditions'
            classes: 'checkbox'
            prepend: true
            type: checkbox
            validate:
                required: true

        g-recaptcha-response:
            label: Captcha
            type: captcha
            validate:
                required: true

    buttons:
        submit:
            type: submit
            value: Send
            classes: 'btn btn-primary'

    process:
        captcha: true
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        email:
            from: "{{ config.plugins.email.from }}"
            to: "{{ config.plugins.email.to }}"
            subject: "[Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        message: 'İletişiminiz için teşekkürler!'
        reset: true
        redirect: /success
        # display: thankyou
---

