Models:

Group (Role) -

User - (created_at, updated_at, deleted_at)
    status (enum)
    email
    email_verify_at
    phone -- ChangePhone
    phone_verify_at
    password (HASH) -- ChangePassword|ForgetPassword
    google_id - https://laravel.com/docs/10.x/socialite - проверить по штатному решению
    
    + partner_code - код для партнерской программы

VerifyCode -

Profile -
    user_id : U
    avatar_url
    name
    lang ...
    
Public Route:
    Register | Login
    Application Form
    ChangePassword | Forget Password
    VerifyEmail | VerifyPhone
    Connect Google

Admin Route:
    CRUD Users
    CRUD Profile

Client Route:
-- Когда один микросервис приходит за информацией по HTTP
- Добавить в блек
- Убрать блек
- Проверить блек
OutSide Query: 
-- Когда необходимы данные из другого микросервиса

Events Out:
    user.registration, user.login ...
    user.application_form

Events In:
