let likebtn = document.querySelector("#likebtn");
let dislikebtn = document.querySelector("#dislikebtn");
let likeinput = document.querySelector("#input1");
let dislikeinput = document.querySelector("#input2");
let ilike = document.getElementById("like");
let idislike = document.getElementById("dislike");

var count1 = 1;
var count2 = 1;

likebtn.addEventListener("click", function() {
	count1++;
	if (count1 % 2 == 0) {
		likeinput.value = parseInt(likeinput.value) + 1;
		ilike.classList.add("liked")
		if (count2 % 2 == 0) {
			idislike.classList.remove("disliked")
			dislikeinput.value = 0;
			count2 = 1;
		}

	} else {
		likeinput.value = parseInt(likeinput.value) - 1;
		ilike.classList.remove("liked")
		if (count2 % 2 == 0) {
			idislike.classList.remove("disliked")
			dislikeinput.value = 0;
			count2 = 1;
		}
	}

});

dislikebtn.addEventListener("click", function() {
	count2++;
	if (count2 % 2 == 0) {
		dislikeinput.value = parseInt(dislikeinput.value) + 1;

		idislike.classList.add("disliked")

		if (count1 % 2 == 0) {
			ilike.classList.remove("liked")
			likeinput.value = 0;
			count1 = 1;
		}
	} else {
		dislikeinput.value = parseInt(dislikeinput.value) - 1;

		idislike.classList.remove("disliked")
		if (count1 % 2 == 0) {
			ilike.classList.remove("liked")
			likeinput.value = 0;
			count1 = 1;
		}
	}

});


document.getElementById("commentbtn").addEventListener("click", ()=>{
    document.getElementById("commentinput").style.display="block";
})