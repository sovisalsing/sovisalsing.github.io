

function display(value) {              
    document.getElementById('result').value += value;
}
function empty(value) {
    document.getElementById('result').value = '';
}
function equal(value) {
    var value1= document.getElementById('result').value;
    let res = eval(value1);
    document.getElementById('result').value = res;
}

// using JavaScript + JQuery
// eval() is JQuery
