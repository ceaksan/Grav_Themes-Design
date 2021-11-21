---
title: Contact
media_order: person_2.jpg
heading: 'Lets Talk!'
blockquote: '&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.A small river named Duden flows by their place and supplies it with the necessary regelialia.&rdquo;'
menu: 'Contact Us'
never_cache_twig: true
image:
    user/pages/04.contact/person_2.jpg:
        name: person_2.jpg
        type: image/jpeg
        size: 58496
        path: user/pages/04.contact/person_2.jpg
twig: true
title_main: '<span>Lets</span> <span>Talk</span>'
form_title: '<span>Get in touch</span> <span>with us</span>'
form_description: 'We believe in collaboration for a more lasting impact. Let’s talk on how we can collaborate to continue our environmental advocacy. Please drop us a message'
map: '0'
title_image:
    user/pages/08.contact/blue-textile-1078981.jpg:
        name: blue-textile-1078981.jpg
        type: image/jpeg
        size: 27555
        path: user/pages/08.contact/blue-textile-1078981.jpg
form:
    name: contact
    classes: 'contact-form bg-white p-0'
    refresh_prevention: true
    fields:
        fullname:
            type: fieldset
            classes: row
            fields:
                row-1-1:
                    type: fieldset
                    classes: col-md-6
                    fields:
                        firstname:
                            name: firstname
                            id: firstname
                            label: 'First Name'
                            classes: form-control
                            outerclasses: form-group
                            labelclasses: text-black
                            type: text
                            validate:
                                required: true
                row-1-2:
                    type: fieldset
                    classes: col-md-6
                    fields:
                        lastname:
                            name: lastname
                            id: lastname
                            label: 'Last Name'
                            classes: form-control
                            outerclasses: form-group
                            labelclasses: text-black
                            type: text
                            validate:
                                required: true
        email:
            label: E-mail
            placeholder: name@domain.com
            classes: form-control
            labelclasses: text-black
            outerclasses: form-group
            type: email
            validate:
                required: true
        message:
            label: Message
            classes: form-control
            labelclasses: text-black
            outerclasses: form-group
            placeholder: ''
            type: textarea
            size: long
            validate:
                required: true
        term:
            label: 'Accept terms and conditions'
            classes: checkbox
            prepend: true
            type: checkbox
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: Send
            classes: 'btn btn-primary'
    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            from: '{{ config.plugins.email.from }}'
            to: '{{ config.plugins.email.to }}'
            subject: '[Contact Form] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'İletişiminiz için teşekkürler!'
        reset: true
        redirect: /success
---

