
const events = [
    {
        title: "Halloween",
        date: new Date("2026-10-31")
    },
    {
        title: "Christmas",
        date: new Date("2026-12-25")
    },
    {
        title: "Baoday",
        date: new Date("2026-08-28")
    },
    {
        title: "today",
        date: new Date()
    }
];



events.forEach((element) => {

    element.dateDiffernce = Math.floor((Math.abs(element.date - new Date())) / (1000 * 60 * 60 * 24));

    year = element.date.getFullYear();
    month = element.date.getMonth() + 1;
    day = element.date.getDate();

    if(month < 10){
        month = String(month).padStart(2,"0");
    }
    if(day < 10){
        day = String(day).padStart(2,"0");
    }
    let s = String(year) + "-" + month + "-" + day
    element.dateFormatted = s
})
        
// Why are we using document.write I hate this method LOL
events.forEach((event) => {
    if (event.date > new Date()) {
    document.write(
        "<p style='color: green;'>" +
        event.title + " - " + event.dateDiffernce + " days remaining</p>"
    );
}
else if (event.date < new Date()) {
    document.write(
        "<p style='color: grey;'>" +
        event.title + " - Passed " + event.dateDiffernce +
        " days ago</p>"
    );
}
else {
    document.write(
        "<p style='color: orange;'>" +
        event.title + " - Happening Today!</p>"
    );
}
})

// ----- Palindrome Checker section -----

document.write("<h1>Palindrome List! </h1>")

function cleanStr(str){
    return str.replace(/\W/g, '').toLowerCase();
}

function palindromeCheck(str) {


    let j = str.length - 1
    for (let i = 0; i < str.length / 2; i++){
        if (str[i] != str[j]) {
            return false;
        }
        j--;
    }
    return true;
}

const palindromes = [
    "Mr. Owl ate my metal worm.",
    "I’m on a seafood diet. I see food and I eat it.",
    "level",
    "Love is sharing your popcorn.",
    "Was it a car or a cat I saw?",
    "A nut for a jar of tuna.",
    "vote solomon"
]

palindromes.forEach( (sentence) => {
    let str = cleanStr(sentence)
    if (palindromeCheck(str)) {
        document.write(
            "<p style='color: red; font-weight: bold;'>" + sentence + "</p>"
        )
    } else {
        document.write(
            "<p style='color: gray; font-style:italics'>" + sentence + "</p>"
        )
    }
})