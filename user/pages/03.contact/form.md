---
title: contact
menu: Contact
body_classes: 'title-center title-h1h2'
form:
 fields:
   name:
     type: text
     label: Nom
     validate:
       required: true
       message: Renseignez votre nom!

   email:
     type: text
     label: Email
     validate:
       type: email
       required: true
       message: Renseignez votre email!

   subject:
     type: text
     label: Objet
     validate:
       required: true
       message: Renseignez l'objet de votre message!

   message:
     type: textarea
     label: Votre message
     validate:
       required: true


 buttons:
   submit:
     type: submit
     value: Envoyez

 process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        email:
            subject: "[Site Contact] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        message: Merci pour votre message!
        display: thankyou
---

# Une question ?
## Contactez-nous !



