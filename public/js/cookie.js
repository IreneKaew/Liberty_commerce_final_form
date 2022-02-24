const checkup = document.cookie
    .split('; ')
    .find(row => row.startsWith('checkup='))


if (checkup == 'yes') {
    acceptcookie();
}
function acceptcookie() {
    document.querySelector(".body-signin").style.overflow = "auto";
    document.querySelector(".font-cookie").style.display = "none";
    document.cookie = "checkup=yes";
}