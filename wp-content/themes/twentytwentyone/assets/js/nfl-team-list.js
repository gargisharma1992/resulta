$(document).ready(function () {

	// Search Implementation
	$("#searchTeams").on("keyup", function() {
		var value = $(this).val();
		var regexPattern = new RegExp(value, "i");

		$('#nflTeamlist').find('tr').each(function() {
			if (($(this).find('td').text().search(regexPattern) <= 0)) {
				$(this).not('.tableHeadings').hide();
				$('#errormessage').text("Records not found !!!!");
			}
			if (($(this).find('td').text().search(regexPattern) >= 0)) {
				$(this).show();
			}
		});
	});

	// Sorting Implementation : Change the icon class when toggle and sort the data in table by each column
	$('.tableHeadings th').click(function() {
		$("i", this).toggleClass("fa fa-angle-up fa fa-angle-down");

		var table = $(this).parents('table').eq(0)
		var rows = table.find('tr:gt(0)').toArray().sort(compareData($(this).index()))
		this.asc = !this.asc
		if (!this.asc){rows = rows.reverse()}
		for (var i = 0; i < rows.length; i++){table.append(rows[i])}
	})

	function compareData(index) {
		// index is column number in array
		return function(x, y) {
			var firstValue = getEachCellValue(x, index);
			var secondValue = getEachCellValue(y, index);
			return $.isNumeric(firstValue) && $.isNumeric(secondValue) ? firstValue - secondValue : firstValue.toString().localeCompare(secondValue);
		}
	}

	function getEachCellValue(row, index) {
		return $(row).children('td').eq(index).text()
	}
});
