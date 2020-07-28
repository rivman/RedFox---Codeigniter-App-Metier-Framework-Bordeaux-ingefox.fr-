/**
 * Method used to send AJAX requests
 * @param {Array} data Array containing the parameters for the AJAX request (url, data, type, dataType, callback)
 * @returns {{}} Response of the AJAX request
 */
function sendAjax(data) {
    let ret = {};
    if ("callBack" in data) {
        let dataToSend = {};
        if ("data" in data) dataToSend = data['data'];
        $.ajax({
            url: data['url'],
            type: data['type'],
            dataType: data['dataType'],
            data: dataToSend,
            success: function (response) {
                ret['status'] = "ok";
                ret['response'] = response;
                data["callBack"](ret);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                ret['status'] = "ko";
                ret['errorThrown'] = errorThrown;
                ret['textStatus'] = textStatus;
                data["callBack"](ret);
            }
        })
    } else {
        ret['status'] = "ko";
        ret['errorThrown'] = "No callback given";
        return ret;
    }
}

/**
 * Load a View retrieved from an AJAX request into the modal content div of the V_layout view and toggle the modal display
 * @param {string} url AJAX request URL
 * @param {string} title Title of the modal
 * @param {Array} data Data needed to be sent in the AJAX request
 * @param {boolean} large Large modal
 */
function openModal(url, title, data = null, large = true) {
    let modal = $('#RF_MODAL');
    let modalBody = $('#RF_MODAL_BODY');
    let modalTitle = $('#RF_MODAL_TITLE');
    let modalDialog = $('#RF_MODAL_DIALOG');
    let options = {
        'url' : url,
        'type' : 'post',
        "dataType": "json",
        "data" : data,
        'callBack' : function (ret) {
            if (ret['status'] === 'ok') {
                if (large){
                    modalDialog.addClass('modal-lg');
                }
                else {
                    modalDialog.removeClass('modal-lg');
                }
                modal.modal('handleUpdate');
                modalTitle.html(title);
                modalBody.html(ret['response']);
                modal.modal('show');
            }
            else alert("Une erreur s'est produite : " + ret['errorThrown'] + " \n" + ret['textStatus'])
        }
    };
    sendAjax(options)
}

/**
 * Display a modal with title and content in parameters
 * @returns void
 * @param title
 * @param content
 */
function openModalText(title, content)
{
    let modal = $('#RF_MODAL');
    let modalBody = $('#RF_MODAL_BODY');
    let modalTitle = $('#RF_MODAL_TITLE');
    modalTitle.html(title);
    modalBody.html(content);
    modal.modal('show');
}

/**
 * Load a View retrieved from an AJAX request into a specific HTML element
 * @param {string} url AJAX request URL
 * @param {Array} data Data needed to be sent in the AJAX request
 * @param {jQuery} element jQuery object representing the HTML element to be filled
 */
function loadHTML(url,data,element) {
    let options = {
        'url' : url,
        'type' : 'post',
        "dataType": "json",
        "data" : data,
        'callBack' : function (ret) {
            if (ret['status'] === 'ok') {
                element.html(ret['response']);
            }
            else alert("Une erreur s'est produite : " + ret['errorThrown'] + " \n" + ret['textStatus'])
        }
    };
    sendAjax(options);
}

/**
 * Check phone number format
 * @param phoneNumber Phone number to verify
 * @param {boolean} required - is field required ?
 * @param {boolean} mustBeCellPhone - boolean - number required to be a cellphone number ?
 * @returns {boolean} Valid format ?
 */
function verifyPhone(phoneNumber,required=false,mustBeCellPhone=false) {
    let valid = true;
    phoneNumber = phoneNumber.replace(/[^0-9]/g,'');
    let startsWith06or07 = (phoneNumber.startsWith('6',1) || phoneNumber.startsWith('7',1));
    if ((phoneNumber!=="") && ((!phoneNumber.match(/^0[0-9]{9}$/)) )){
        // phone number is not phone number
        valid = false;
    } else if( (phoneNumber!=="") && (mustBeCellPhone && !startsWith06or07))
    {
        // Cell phone has not initial number
        valid = false;
    }else if(required && !(phoneNumber.length > 0))
    {
        // field empty but required
        valid=false;
    }
    return valid;
}

function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });
    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }
    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}