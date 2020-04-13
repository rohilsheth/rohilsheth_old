'use strict';

//grab a form
const form = document.querySelector('.form1');

//grab an input
const inputEmail = form.querySelector('#inputEmail');
const inputName = form.querySelector('#inputName');
const inputPhone = form.querySelector('#inputPhone');
const inputText = form.querySelector('#inputText');


//config your firebase push
const config = {
    apiKey: "AIzaSyCdcMo6h32afTMS9T-rVADuGJQkyyATDWQ",
    authDomain: "personal-website-e7fab.firebaseapp.com",
    databaseURL: "https://personal-website-e7fab.firebaseio.com",
    projectId: "personal-website-e7fab",
    storageBucket: "personal-website-e7fab.appspot.com",
    messagingSenderId: "914877947108",
    appId: "1:914877947108:web:c9f8ec6dd3039c8e"
};



//create a functions to push
    function firebasePush(input1, input2, input3, input4) {


        //prevents from breaking
        if (!firebase.apps.length) {
            firebase.initializeApp(config);
        }

        var newMessageRef = firebase.database().ref('users').push().set({
            name: input1.value,
            email: input2.value,
            phone: input3.value,
            text: input4.value
         })
        //push itself
        //var mailsRef = firebase.database().ref('emails').push().set({mail: input1.value});
        //var nameRef = firebase.database().ref('names').push().set({name: input2.value});
        //var phoneRef = firebase.database().ref('phones').push().set({phone: input3.value});
        //var textRef = firebase.database().ref('messages').push().set({message: input4.value});
        

    }

//push on form submit
    if (form) {
        form.addEventListener('submit', function (evt) {
            evt.preventDefault();
            firebasePush(inputName, inputEmail, inputPhone, inputText);

            //shows alert if everything went well.
            return alert('Thank you! I\'ll reach out to you soon :)');
        })
    }