/** ===> PHP PLAY 2025 UPDATE ===>
 * @description PHP WORKSPACE THROUGH LARACASTS:
 * - From November 2025 to Present
 * - Following a comprehensive full-stack Laravel course.
 * @constant latestUpdate
 * - Date is changed for any first update completed on a new day.
 * @author Camberden (Chrispy | Kippi)
 */
const latestUpdate = "December 4th, 2025";
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
