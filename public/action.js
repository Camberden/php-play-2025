/** ===> PHP PLAY 2025 UPDATE ===>
 * @description PHP WORKSPACE THROUGH LARACASTS:
 * - From November 2025 to Present
 * - Following a comprehensive full-stack Laravel course.
 * @constant latestUpdate
 * - Date is changed for any first update completed on a new day.
 * @author Camberden (Chrispy | Kippi)
 */
const latestUpdate = "December 10th, 2025";
document.querySelector("#latest-update").innerHTML = latestUpdate;
function runStyling() {
	document.querySelectorAll("li").forEach(li => {
	li.style.color = "white";
	li.style.display = "inline";
	li.append("...");
});
}
window.onload = function() {
	runStyling();
}
document.querySelectorAll("form").forEach(form => {
	form.onsubmit = function() {
		// alert("Submitted!");
		console.log("Request Sent!");
	}
});

/**
 * 
 * @description Determines whether two same items exist at different indeces.
 * @param {Number[]} arry 
 * @param {Number} item 
 * @returns {Boolean} 
 * 
 */
function determineTwoAppearances(arry, item) {

	const start = arry.indexOf(item);
	const end = arry.lastIndexOf(item);
	
	if (start !== end) {
		return true;
	}
	return false;
}

function twoSum (nums, target) {

	const result = [];
	// result.length = 1;
    for (let i = 0; i < nums.length; i++) {
		let anchor = target - nums[i];
		const twoPresent = nums.indexOf(nums[i]) !== nums.lastIndexOf(nums[i]);
		if (twoPresent && anchor === nums[i]) {
		
			result[0] = i;
			result[1] = nums.lastIndexOf(anchor);
			return result;
		} else if (nums.includes(anchor) && anchor !== nums[i]) {
			result[0] = i;
			result[1] = nums.indexOf(anchor);
			return result;
		}
    }
	console.log("Failed");
    return nums;
}

/**
 * @param {string} haystack
 * @param {string} needle
 * @return {number}
 */
const strStr = function(haystack, needle) {
	if (haystack.includes(needle)) {
		// let filler = "*".repeat(needle.length);	
		// haystack = haystack.split(needle);
		// haystack = haystack.replaceAll(needle, filler);
		// return haystack.indexOf("*");
		return haystack.indexOf(needle);

	} else {
		return -1;
	}
};

// let welcomeUsername = document.querySelector("#latest-user").innerText;
// sessionStorage.setItem("username", welcomeUsername);
// console.log("Welcome, " + sessionStorage.getItem("username") + "!");
