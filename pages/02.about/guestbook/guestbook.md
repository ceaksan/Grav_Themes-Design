---
title: 'Guestbook Page'
never_cache_twig: true
cache_enable: false
visible: true
form:
    name: guestbook
    classes: 'contact-form bg-white p-0'
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
                            autofocus: 'on'
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
        date:
            type: hidden
            process:
                fillWithCurrentDateTime: true
    buttons:
        -
            type: submit
            value: Submit
            classes: 'btn btn-primary'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: '{{ config.plugins.email.to }}'
                subject: '[Site Guestbook] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                filename: messages.yaml
                operation: add
        -
            message: 'Thank you for writing your message!'
---

