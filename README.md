# Sign In
https://www.swanntechnologies.com/Oscar2018/backend/signin

-post
email: testuser@mail.com
pwd: test

-response
{
	"state":true,
	"msg":"",
	"user":{
		"id":"41",
		"name":"Test User",
		"email":"testuser@mail.com",
		"password":"098f6bcd4621d373cade4e832627b4f6",
		"level":"101",
		"score":"0"
	}
}

{
	"state":false,
	"msg":"Your email or password is invalid.",
	"user":null
}

# Sign up

https://www.swanntechnologies.com/Oscar2018/backend/signup

-post
name: testtest
email: testtest@mail.com
pwd: test

-res
{
	"state":true,
	"msg":"",
	"user":{
		"id":"43",
		"name":"testtest","email":"testtest1@mail.com",
		"password":"098f6bcd4621d373cade4e832627b4f6",
		"level":"101",
		"score":"0"
	}
}

{
	"state":false,
	"msg":"Sorry, email already exists.",
	"user":null
}

# getData
https://www.swanntechnologies.com/Oscar2018/backend/getdata

-post
uid : 41

-res
{
    "user_answers": "r0007p,r1001p,r2003p,r3001p,r4004p,r5001p,r6003p,r7000p,r8002p,r9002p,r100003p,r110003p,r120003p,r130002p,r140004p,r150000p,r160002p,r170002p,r180004p,r190004p,r200003p,r210000p,r220003p,r230003p,",
    "admin_answers": "r0007p,r1001p,r2003p,r3001p,r4004p,r5001p,r6001p,r7000p,r8000p,r9002p,r100002p,r110000p,r120001p,r130000p,r140003p,r150001p,r160002p,r170002p,r180004p,r190000p,r200002p,r210000p,r220002p,r230002p,",
    "info1": "The shape of water",
    "info2": null,
    "info3": 12
}

{
    "user_answers": "",
    "admin_answers": "r0007p,r1001p,r2003p,r3001p,r4004p,r5001p,r6001p,r7000p,r8000p,r9002p,r100002p,r110000p,r120001p,r130000p,r140003p,r150001p,r160002p,r170002p,r180004p,r190000p,r200002p,r210000p,r220002p,r230002p,",
    "info1": "",
    "info2": "",
    "info3": 0
}