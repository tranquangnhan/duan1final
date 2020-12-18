var COMMANDS = {
    CHECKOUT : 'checkout',
    HELLO : 'hello',
    LOGIN : 'login',
    HOME: 'home',
    SIGNUP: 'signup',
    BLOG: 'blog'
}

var alanBtnInstance = alanBtn({
    top:'300',
    key: "7839a3c4de9381aee35f2016cabe91452e956eca572e1d8b807a3e2338fdd0dc/prod",
    onCommand: function(commandData) {
        if (commandData.command === COMMANDS.CHECKOUT) {
            checkout();
        }
        if(commandData.command === COMMANDS.LOGIN){
            login();
        }
        if(commandData.command === COMMANDS.SIGNUP){
            signup();
        }
        if(commandData.command === COMMANDS.HOME){
            home();
        }
        if(commandData.command === COMMANDS.BLOG){
            blog();
        }
    },
    rootEl: document.getElementById("alan-btn"),
});
function checkout() {
    window.location.href= 'index.php?act=thanhtoan';
}
function login(){
    window.location.href= 'index.php?act=login';
}
function home() {
    window.location.href= 'index.php';
}
function signup(){
    window.location.href= 'index.php?act=signup';
}
function blog(){
    window.location.href= 'index.php?act=blog';
}