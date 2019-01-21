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

# set Problem
https://www.swanntechnologies.com/Oscar2018/backend/setProblem

-post
problems : [{"name":"0","value":"r0007p"},{"name":"1","value":"r1001p"},{"name":"2","value":"r2003p"},{"name":"3","value":"r3001p"},{"name":"4","value":"r4004p"},{"name":"5","value":"r5003p"},{"name":"6","value":"r6004p"},{"name":"7","value":"r7000p"},{"name":"8","value":"r8000p"},{"name":"9","value":"r9002p"},{"name":"10","value":"r100002p"},{"name":"11","value":"r110000p"},{"name":"12","value":"r120001p"},{"name":"13","value":"r130000p"},{"name":"14","value":"r140000p"},{"name":"15","value":"r150002p"},{"name":"16","value":"r160002p"},{"name":"17","value":"r170004p"},{"name":"18","value":"r180004p"},{"name":"19","value":"r190000p"},{"name":"20","value":"r200002p"},{"name":"21","value":"r210000p"},{"name":"22","value":"r220002p"},{"name":"23","value":"r230002p"}]

oscar_title : test title
how_many : 10
uid: 26

-res
{
    "status": true
}


# getData
https://www.swanntechnologies.com/Oscar2018/backend/getdata

-post
uid : 41

-res
{
    "user_answers": "r0007p,r1001p,r2003p,r3001p,r4004p,r5001p,r6003p,r7000p,r8002p,r9002p,r100003p,r110003p,r120003p,r130002p,r140004p,r150000p,r160002p,r170002p,r180004p,r190004p,r200003p,r210000p,r220003p,r230003p,",
    "admin_answers": "r0007p,r1001p,r2003p,r3001p,r4004p,r5001p,r6001p,r7000p,r8000p,r9002p,r100002p,r110000p,r120001p,r130000p,r140003p,r150001p,r160002p,r170002p,r180004p,r190000p,r200002p,r210000p,r220002p,r230002p,",
    "info1": "The Shape of Water",
    "info2": "10",
    "info3": 12,
    "info": {
        "id": "26",
        "name": "Matt Campana",
        "email": "mcpurple@hotmail.com",
        "password": "098f6bcd4621d373cade4e832627b4f6",
        "level": "101",
        "score": "65"
    },
    "problems": [
        {
            "title": "Best Picture",
            "score": 10,
            "data": [
                "Call Me by Your Name",
                "Darkest Hour",
                "Dunkirk",
                "Get Out",
                "Lady Bird",
                "Phantom Thread",
                "The Post",
                "The Shape of Water",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Best Director",
            "score": 7,
            "data": [
                "Paul Thomas Anderson, Phantom Thread",
                "Guillermo del Toro, The Shape of Water",
                "Greta Gerwig, Lady Bird",
                "Christopher Nolan, Dunkirk",
                "Jordan Peele, Get Out"
            ]
        },
        {
            "title": "Actor in a Leading Role",
            "score": 7,
            "data": [
                "Timothée Chalamet, Call Me by Your Name",
                "Daniel Day-Lewis, Phantom Thread",
                "Daniel Kaluuya, Get Out",
                "Gary Oldman, Darkest Hour",
                "Denzel Washington, Roman J.Israel,Esq."
            ]
        },
        {
            "title": "Actress in a Leading Role",
            "score": 7,
            "data": [
                "Sally Hawkins, The Shape of Water",
                "Frances McDormand, Three Billboards Outside Ebbing, Missouri",
                "Margot Robbie, I, Tonya",
                "Saoirse Ronan, Lady Bird",
                "Meryl Streep, The Post"
            ]
        },
        {
            "title": "Actor in a Supporting Role",
            "score": 6,
            "data": [
                "Willem Dafoe, The Florida Project",
                "Woody Harrelson, Three Billboards Outside Ebbing, Missouri",
                "Richard Jenkins, The Shape of Water",
                "Christopher Plummer, All the Money in the World",
                "Sam Rockwell, Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Actress in a Supporting Role",
            "score": 6,
            "data": [
                "Mary J. Blige, Mudbound",
                "Allison Janney, I, Tonya",
                "Lesley Manville, Phantom Thread",
                "Laurie Metcalf, Lady Bird",
                "Octavia Spencer, The Shape of Water"
            ]
        },
        {
            "title": "Original Screenplay",
            "score": 5,
            "data": [
                "The Big Sick",
                "Get Out",
                "Lady Bird",
                "The Shape of Water",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Adapted Screenplay",
            "score": 5,
            "data": [
                "Call Me by Your Name",
                "The Disaster Artist",
                "Logan",
                "Molly's Game",
                "Mudbound"
            ]
        },
        {
            "title": "Foreign Language Film",
            "score": 5,
            "data": [
                "A Fantastic Woman, Chile",
                "The Insult, Lebanon",
                "Loveless, Russia",
                "On Body and Soul, Hungary",
                "The Square, Sweden"
            ]
        },
        {
            "title": "Animated Feature",
            "score": 5,
            "data": [
                "The Boss Baby",
                "The Breadwinner",
                "Coco",
                "Ferdinand",
                "Loving Vincent"
            ]
        },
        {
            "title": "Sound Editing",
            "score": 2,
            "data": [
                "Baby Driver",
                "Blade Runner 2049",
                "Dunkirk",
                "The Shape of Water",
                "Star Wars: The Last Jedi"
            ]
        },
        {
            "title": "Visual Effects",
            "score": 3,
            "data": [
                "Blade Runner 2049",
                "Guardians of the Galaxy Vol. 2",
                "Kong: Skull Island",
                "Star Wars: The Last Jedi",
                "War for the Planet of the Apes"
            ]
        },
        {
            "title": "Film Editing",
            "score": 3,
            "data": [
                "Baby Driver",
                "Dunkirk",
                "I, Tonya",
                "The Shape of Water",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Short Film, Animated",
            "score": 2,
            "data": [
                "Dear Basketball",
                "Garden Party",
                "Lou",
                "Negative Space",
                "Revolting Rhymes"
            ]
        },
        {
            "title": "Short Film, Live Action",
            "score": 2,
            "data": [
                "DeKalb Elementary",
                "The Eleven O’Clock",
                "My Nephew Emmett",
                "The Silent Child",
                "Watu Wote/All of Us"
            ]
        },
        {
            "title": "Documentary Short Subject",
            "score": 2,
            "data": [
                "Edith+Eddie",
                "Heaven Is a Traffic Jam on the 405",
                "Heroin(e)",
                "Knife Skills",
                "Traffic Stop"
            ]
        },
        {
            "title": "Original Score",
            "score": 3,
            "data": [
                "Dunkirk",
                "Phantom Thread",
                "The Shape of Water",
                "Star Wars: The Last Jedi",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Original Song",
            "score": 3,
            "data": [
                "Mighty River, Mudbound",
                "The Mystery of Love, Call Me by Your Name",
                "Remember Me, Coco",
                "Stand Up for Something, Marshall",
                "This Is Me, The Greatest Showman"
            ]
        },
        {
            "title": "Production Design",
            "score": 3,
            "data": [
                "Beauty and the Beast",
                "Blade Runner 2049",
                "Darkest Hour",
                "Dunkirk",
                "The Shape of Water"
            ]
        },
        {
            "title": "Cinematography",
            "score": 3,
            "data": [
                "Blade Runner 2049",
                "Darkest Hour",
                "Dunkirk",
                "Mudbound",
                "The Shape of Water"
            ]
        },
        {
            "title": "Costume Design",
            "score": 3,
            "data": [
                "Beauty and the Beast",
                "Darkest Hour",
                "Phantom Thread",
                "The Shape of Water",
                "Victoria and Abdul"
            ]
        },
        {
            "title": "Makeup and Hairstyling",
            "score": 3,
            "data": [
                "Darkest Hour",
                "Victoria and Abdul",
                "Wonder"
            ]
        },
        {
            "title": "Documentary Feature",
            "score": 2,
            "data": [
                "Abacus: Small Enough to Jail",
                "Faces Places",
                "Icarus",
                "Last Men in Aleppo",
                "Strong Island"
            ]
        },
        {
            "title": "Sound Mixing",
            "score": 3,
            "data": [
                "Baby Driver",
                "Blade Runner 2049",
                "Dunkirk",
                "The Shape of Water",
                "Star Wars: The Last Jedi"
            ]
        }
    ]
}

{
    "user_answers": "",
    "admin_answers": "r0007p,r1001p,r2003p,r3001p,r4004p,r5001p,r6001p,r7000p,r8000p,r9002p,r100002p,r110000p,r120001p,r130000p,r140003p,r150001p,r160002p,r170002p,r180004p,r190000p,r200002p,r210000p,r220002p,r230002p,",
    "info1": "",
    "info2": "",
    "info3": 0,
    "info": [],
    "problems": [
        {
            "title": "Best Picture",
            "score": 10,
            "data": [
                "Call Me by Your Name",
                "Darkest Hour",
                "Dunkirk",
                "Get Out",
                "Lady Bird",
                "Phantom Thread",
                "The Post",
                "The Shape of Water",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Best Director",
            "score": 7,
            "data": [
                "Paul Thomas Anderson, Phantom Thread",
                "Guillermo del Toro, The Shape of Water",
                "Greta Gerwig, Lady Bird",
                "Christopher Nolan, Dunkirk",
                "Jordan Peele, Get Out"
            ]
        },
        {
            "title": "Actor in a Leading Role",
            "score": 7,
            "data": [
                "Timothée Chalamet, Call Me by Your Name",
                "Daniel Day-Lewis, Phantom Thread",
                "Daniel Kaluuya, Get Out",
                "Gary Oldman, Darkest Hour",
                "Denzel Washington, Roman J.Israel,Esq."
            ]
        },
        {
            "title": "Actress in a Leading Role",
            "score": 7,
            "data": [
                "Sally Hawkins, The Shape of Water",
                "Frances McDormand, Three Billboards Outside Ebbing, Missouri",
                "Margot Robbie, I, Tonya",
                "Saoirse Ronan, Lady Bird",
                "Meryl Streep, The Post"
            ]
        },
        {
            "title": "Actor in a Supporting Role",
            "score": 6,
            "data": [
                "Willem Dafoe, The Florida Project",
                "Woody Harrelson, Three Billboards Outside Ebbing, Missouri",
                "Richard Jenkins, The Shape of Water",
                "Christopher Plummer, All the Money in the World",
                "Sam Rockwell, Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Actress in a Supporting Role",
            "score": 6,
            "data": [
                "Mary J. Blige, Mudbound",
                "Allison Janney, I, Tonya",
                "Lesley Manville, Phantom Thread",
                "Laurie Metcalf, Lady Bird",
                "Octavia Spencer, The Shape of Water"
            ]
        },
        {
            "title": "Original Screenplay",
            "score": 5,
            "data": [
                "The Big Sick",
                "Get Out",
                "Lady Bird",
                "The Shape of Water",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Adapted Screenplay",
            "score": 5,
            "data": [
                "Call Me by Your Name",
                "The Disaster Artist",
                "Logan",
                "Molly's Game",
                "Mudbound"
            ]
        },
        {
            "title": "Foreign Language Film",
            "score": 5,
            "data": [
                "A Fantastic Woman, Chile",
                "The Insult, Lebanon",
                "Loveless, Russia",
                "On Body and Soul, Hungary",
                "The Square, Sweden"
            ]
        },
        {
            "title": "Animated Feature",
            "score": 5,
            "data": [
                "The Boss Baby",
                "The Breadwinner",
                "Coco",
                "Ferdinand",
                "Loving Vincent"
            ]
        },
        {
            "title": "Sound Editing",
            "score": 2,
            "data": [
                "Baby Driver",
                "Blade Runner 2049",
                "Dunkirk",
                "The Shape of Water",
                "Star Wars: The Last Jedi"
            ]
        },
        {
            "title": "Visual Effects",
            "score": 3,
            "data": [
                "Blade Runner 2049",
                "Guardians of the Galaxy Vol. 2",
                "Kong: Skull Island",
                "Star Wars: The Last Jedi",
                "War for the Planet of the Apes"
            ]
        },
        {
            "title": "Film Editing",
            "score": 3,
            "data": [
                "Baby Driver",
                "Dunkirk",
                "I, Tonya",
                "The Shape of Water",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Short Film, Animated",
            "score": 2,
            "data": [
                "Dear Basketball",
                "Garden Party",
                "Lou",
                "Negative Space",
                "Revolting Rhymes"
            ]
        },
        {
            "title": "Short Film, Live Action",
            "score": 2,
            "data": [
                "DeKalb Elementary",
                "The Eleven O’Clock",
                "My Nephew Emmett",
                "The Silent Child",
                "Watu Wote/All of Us"
            ]
        },
        {
            "title": "Documentary Short Subject",
            "score": 2,
            "data": [
                "Edith+Eddie",
                "Heaven Is a Traffic Jam on the 405",
                "Heroin(e)",
                "Knife Skills",
                "Traffic Stop"
            ]
        },
        {
            "title": "Original Score",
            "score": 3,
            "data": [
                "Dunkirk",
                "Phantom Thread",
                "The Shape of Water",
                "Star Wars: The Last Jedi",
                "Three Billboards Outside Ebbing, Missouri"
            ]
        },
        {
            "title": "Original Song",
            "score": 3,
            "data": [
                "Mighty River, Mudbound",
                "The Mystery of Love, Call Me by Your Name",
                "Remember Me, Coco",
                "Stand Up for Something, Marshall",
                "This Is Me, The Greatest Showman"
            ]
        },
        {
            "title": "Production Design",
            "score": 3,
            "data": [
                "Beauty and the Beast",
                "Blade Runner 2049",
                "Darkest Hour",
                "Dunkirk",
                "The Shape of Water"
            ]
        },
        {
            "title": "Cinematography",
            "score": 3,
            "data": [
                "Blade Runner 2049",
                "Darkest Hour",
                "Dunkirk",
                "Mudbound",
                "The Shape of Water"
            ]
        },
        {
            "title": "Costume Design",
            "score": 3,
            "data": [
                "Beauty and the Beast",
                "Darkest Hour",
                "Phantom Thread",
                "The Shape of Water",
                "Victoria and Abdul"
            ]
        },
        {
            "title": "Makeup and Hairstyling",
            "score": 3,
            "data": [
                "Darkest Hour",
                "Victoria and Abdul",
                "Wonder"
            ]
        },
        {
            "title": "Documentary Feature",
            "score": 2,
            "data": [
                "Abacus: Small Enough to Jail",
                "Faces Places",
                "Icarus",
                "Last Men in Aleppo",
                "Strong Island"
            ]
        },
        {
            "title": "Sound Mixing",
            "score": 3,
            "data": [
                "Baby Driver",
                "Blade Runner 2049",
                "Dunkirk",
                "The Shape of Water",
                "Star Wars: The Last Jedi"
            ]
        }
    ]
}
