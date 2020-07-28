let auth_form = document.forms.auth;
console.log("AUTH");
auth_form.addEventListener('submit', async (event)=>{
    event.preventDefault();
    try {
        const response =
            await fetch('/login', {
            method: 'POST',
            body: new FormData(auth_form)
        //        {значение_атрибута_name : значение_атрибута_value}
        });
        const answer = await response.text(); // .json();
        console.log("ответ сервера " + answer);
        responseHandler(answer);
    } catch (error) {
        console.log("ошибка", error);
    }
});
const AUTH_ERROR = 'Ошибка авторизации';
const AUTH_OK = 'Авторизация прошла успешно';
function responseHandler(answer){
    if (answer === AUTH_ERROR){
        alert(answer);
    } else if (answer === AUTH_OK){
        window.location.replace('/');
    }
}
