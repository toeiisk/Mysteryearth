// var videos = ["https://www.youtube.com/embed/wxMg96dkc-c", "https://www.youtube.com/embed/QUpWCRadIIA",
// "https://www.youtube.com/embed/Iqf4Lamnd_k", "https://www.youtube.com/embed/JArFxs40lBw", "https://www.youtube.com/embed/4FljSma0ei8"];
// window.onload = function () {
//     var playerDiv = document.getElementById("random_player");
//     var player = document.createElement("IFRAME");
//     var randomVideoUrl = videos[Math.floor(Math.random() * videos.length)];
//     player.setAttribute('width', '80%');
//     player.setAttribute('height', '500px');
//     player.setAttribute('src', randomVideoUrl);
//     playerDiv.appendChild(player);
// };

function pushDetail(cha, id) {
    // cha = "แม้ขณะนี้ เราจะยังไม่มีหลักฐานถึงสิ่งมีชีวิตอื่นๆ ที่อาศัยในดาวเคราะห์หรือดวงจันทร์สักดวง แต่นักวิทยาศาสตร์ยังคงศรัทธาว่า เราจะมีโอกาสพบสิ่งมีชีวิตในรูปแบบใดรูปแบบหนึ่งอย่างแน่นอน โดยที่เราอาจไม่คุ้นเคยมาก่อน และพวกมันอาจอยู่ในระบบสุริยะเดียวกันกับเรา ";
    console.log(cha);
    document.getElementById(id).innerHTML = cha;
}
function showEdit(cha) {
    // cha = "แม้ขณะนี้ เราจะยังไม่มีหลักฐานถึงสิ่งมีชีวิตอื่นๆ ที่อาศัยในดาวเคราะห์หรือดวงจันทร์สักดวง แต่นักวิทยาศาสตร์ยังคงศรัทธาว่า เราจะมีโอกาสพบสิ่งมีชีวิตในรูปแบบใดรูปแบบหนึ่งอย่างแน่นอน โดยที่เราอาจไม่คุ้นเคยมาก่อน และพวกมันอาจอยู่ในระบบสุริยะเดียวกันกับเรา ";
    console.log(cha);
    document.getElementById("showEdit").value = cha;
}

