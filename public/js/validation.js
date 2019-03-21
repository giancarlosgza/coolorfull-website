const ERRORS_STR = {
    empty: 'Please, do not leave empty fields',
    number: 'Field has to be numeric',
    notEqualPassword: 'Password do not match',
    whiteSpaces: 'Please, do not use any white spaces',
    invalidEmail: 'Please, write a valid email',
    lenghtNotSix: 'Password length has to be 6 or more characters',
};

const INPUT_NAME = $('#name')
const INPUT_USERNAME = $('#username')
const INPUT_EMAIL = $('#email')
const INPUT_PASSWORD = $('#password')
const INPUT_PASSWORD_CONFIRM = $('#password-confirm')

INPUT_NAME.keyup(() => {
    isNameValid(true)
    isWholeFormReady()
})

INPUT_EMAIL.keyup(() => {
    isEmailValid(true)
    isWholeFormReady()
})

INPUT_USERNAME.keyup(() => {
    isUsernameValid(true)
    isWholeFormReady()
})

INPUT_PASSWORD.keyup(() => {
    isPasswordValid(true)
    isWholeFormReady()
})

INPUT_PASSWORD_CONFIRM.keyup(() => {
    isPasswordConfirmValid(true)
    isWholeFormReady()
})


/**
 * Disable new dish submit button
 * @returns void
 */
function disableSubmitButton() {
    $('#disable-payments-overlay').show()
}

/**
 * Checks each input in the new dish form to see if
 * it's ready
 * @returns bool
 */
function isWholeFormReady() {
    console.log('Checking if form is ready...')

    if (isNameValid(false) &&
        isUsernameValid(false) &&
        isEmailValid(false) &&
        isPasswordValid(false) &&
        isPasswordConfirmValid(false))
    {
        console.log('submit button enables because form is ready')
        $('#disable-payments-overlay').hide()
    }
}

/**
 * Checks if the menu name is valid
 * @param markInvalidInput
 * @returns {boolean}
 */
function isNameValid(markInvalidInput) {
    const INPUT_ERROR = $('#name-error')

    if (INPUT_NAME.val()) {
        if (markInvalidInput) {
            INPUT_NAME.removeClass('is-invalid')
            INPUT_ERROR.addClass('d-none')
        }
        return true
    } else {
        if (markInvalidInput) {
            INPUT_NAME.addClass('is-invalid')
            INPUT_ERROR.removeClass('d-none')
            INPUT_ERROR.html(ERRORS_STR.empty)
        }
        console.log('name not ready')
        disableSubmitButton()
        return false
    }
}

/**
 * Checks if the menu name is valid
 * @param markInvalidInput
 * @returns {boolean}
 */
function isUsernameValid(markInvalidInput) {
    const INPUT_ERROR = $('#username-error')

    if (INPUT_USERNAME.val()) {
        if(!hasWhiteSpace(INPUT_USERNAME.val())) {
            if (markInvalidInput) {
                INPUT_USERNAME.removeClass('is-invalid')
                INPUT_ERROR.addClass('d-none')
            }
            return true
        } else {
            if (markInvalidInput) {
                INPUT_USERNAME.addClass('is-invalid')
                INPUT_ERROR.removeClass('d-none')
                INPUT_ERROR.html(ERRORS_STR.whiteSpaces)
            }
            console.log('username not ready')
            disableSubmitButton()
            return false
        }
    } else {
        if (markInvalidInput) {
            INPUT_USERNAME.addClass('is-invalid')
            INPUT_ERROR.removeClass('d-none')
            INPUT_ERROR.html(ERRORS_STR.empty)
        }
        console.log('username not ready')
        disableSubmitButton()
        return false
    }
}

/**
 * Checks if the menu name is valid
 * @param markInvalidInput
 * @returns {boolean}
 */
function isEmailValid(markInvalidInput) {
    const INPUT_ERROR = $('#email-error')

    if (INPUT_EMAIL.val()) {
        if( validateEmail(INPUT_EMAIL.val()) ) {
            if (markInvalidInput) {
                INPUT_EMAIL.removeClass('is-invalid')
                INPUT_ERROR.addClass('d-none')
            }
            return true
        } else {
            if (markInvalidInput) {
                INPUT_EMAIL.addClass('is-invalid')
                INPUT_ERROR.removeClass('d-none')
                INPUT_ERROR.html(ERRORS_STR.invalidEmail)
            }
            disableSubmitButton()
            return false
        }
    } else {
        if (markInvalidInput) {
            INPUT_EMAIL.addClass('is-invalid')
            INPUT_ERROR.removeClass('d-none')
            INPUT_ERROR.html(ERRORS_STR.empty)
        }
        console.log('email not ready')
        disableSubmitButton()
        return false
    }
}


/**
 * Checks if the menu name is valid
 * @param markInvalidInput
 * @returns {boolean}
 */
function isPasswordValid(markInvalidInput) {
    const INPUT_ERROR = $('#password-error')

    if (INPUT_PASSWORD.val()) {
        if(INPUT_PASSWORD.val().length >= 6) {
            if (markInvalidInput) {
                INPUT_PASSWORD.removeClass('is-invalid')
                INPUT_ERROR.addClass('d-none')
            }
            return true
        } else {
            if (markInvalidInput) {
                INPUT_PASSWORD.addClass('is-invalid')
                INPUT_ERROR.removeClass('d-none')
                INPUT_ERROR.html(ERRORS_STR.lenghtNotSix)
            }
            console.log('passord not ready')
            disableSubmitButton()
            return false;
        }
    } else {
        if (markInvalidInput) {
            INPUT_PASSWORD.addClass('is-invalid')
            INPUT_ERROR.removeClass('d-none')
            INPUT_ERROR.html(ERRORS_STR.empty)
        }
        console.log('passord not ready')
        disableSubmitButton()
        return false;
    }
}

/**
 * Checks if the menu name is valid
 * @param markInvalidInput
 * @returns {boolean}
 */
function isPasswordConfirmValid(markInvalidInput) {
    const INPUT_ERROR = $('#password-confirm-error')

    if (INPUT_PASSWORD_CONFIRM.val()) {
        if(INPUT_PASSWORD_CONFIRM.val() === INPUT_PASSWORD.val()){
            if (markInvalidInput) {
                INPUT_PASSWORD_CONFIRM.removeClass('is-invalid')
                INPUT_ERROR.addClass('d-none')
            }
            return true
        } else {
            if (markInvalidInput) {
                INPUT_PASSWORD_CONFIRM.addClass('is-invalid')
                INPUT_ERROR.removeClass('d-none')
                INPUT_ERROR.html(ERRORS_STR.notEqualPassword)
            }
            disableSubmitButton()
            return false
        }

    } else {
        if (markInvalidInput) {
            INPUT_PASSWORD_CONFIRM.addClass('is-invalid')
            INPUT_ERROR.removeClass('d-none')
            INPUT_ERROR.html(ERRORS_STR.empty)
        }
        console.log('password confirm not ready')
        disableSubmitButton()
        return false;
    }
}

/**
 * Validates email structure
 * @param email
 * @returns {boolean}
 */
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

/**
 * Check if string has white spaces
 * @param s
 * @returns {boolean}
 */
function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
}