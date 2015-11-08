/**
 * Created by ADETUNJI on 08/11/2015.
 */
localStorage.setItem("money", 500);

var wallet = localStorage.getItem('money');
var m = document.getElementById('money').innerHTML = wallet;
