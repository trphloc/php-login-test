# php-test
Demo login/token/logout to simulate the logon process of application

1. Login
  - if username contains "tpl", the function will return success
  - Input: {"username":"tpl", "password":"tpl"}
  - Output: 
      {"status":true,
       "data":{"id":1,"username":"tpl","token":"tokentpl",
          "loginDate":1481561937,"expiredDate":1482166737,"isExpired":true},
       "message":"login success"}
2. Token
  - if tokenvalue is "tokentpl" or "tokentpl1" or "tokentpl2", the function will return not expire
  - Input: {"tokenValue":"tokentpl1"}
  - Output: {"status":true,"data":{"id":1,"username":"","token":"tokentpl5","loginDate":1480957302,"expiredDate":1481562102,"isExpired":true}}
3. Logout: no parameter & no value
