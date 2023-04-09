<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_registrations.css">
    <title>Регистрация</title>
</head>
<body>
    <header></header>
    
    
    <div>
        <form>
            <label for="registration_name">Имя пользователя</label>
            <input type="text" name="login" id="registration_name" style="margin-left: 35px;">
            <br>
            <br>
            <label for="registration_email">E-mail</label>
            <input type="email" name="email" id="registration_email" style="margin-left: 114px;">
            <br>
            <br>
            <label for="registration_course">Что Вы изучали?</label>
            <select name="select" id="registration_course" style="margin-left: 41px;">
                <option value="php">PHP</option>
                <option value="C#">C#</option>
                <option value="JavaScript">JavaScript</option>
                <option value="htnl">HTML</option>
                <option value="java">Java</option>
                <option value="python">Python</option>
            </select>
            <br>
            <br>
            <fieldset style="width: 66%;">
                <legend>Что Вы изучали?</legend>
                    <input type="radio" name="I want to be" value="junior">Junior PHP Devolper
                    <input type="radio" name="I want to be" value="middle">Middle PHP Devolper
                    <input type="radio" name="I want to be" value="Fronted">Fronted PHP Devolper
                    <input type="radio" name="I want to be" value="designer">Нееее, хочу быть дизайнером    
            </fieldset> 
            <br>
            <br>
            <fieldset style="width: 66%;">
                <legend>Мои навыки програмирования</legend>
                    <input type="checkbox" name="My skil prog" value="god">Бог програмировани
                    <input type="checkbox" name="My skil prog" value="guru">Гуру програмировани
                    <input type="checkbox" name="My skil prog" value="learning">Я только обучаюсь
            </fieldset> 
            <br>
            <br>
            <label for="time_learning">Во сколько мне удобно приходить на занятия?</label>
            <input type="datetime-local" name="date" id="time_learning" style="margin-left: 10px;">
            <br>
            <br>
            <label for="wish_course">Мои пжелания и комментарии по курсам</label>
            <textarea name="wish" id="wish_course" style="margin-left: 45px;"></textarea>
            <br>
            <br>
            <input type="submit" value="Всё, я справился с заполнением формы" style="margin-left: 234px;">
        </form>
    </div>
    
    
    
    <footer></footer>
    
</body>
</html>