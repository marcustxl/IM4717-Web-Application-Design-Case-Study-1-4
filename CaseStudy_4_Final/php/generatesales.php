<?php

$sales=$_GET['sales'];

if ($sales == "total") {
	totalsales();
} elseif ($sales == "quant") {
	quantsales();
} else {
	echo "something went wrong";
}

function totalsales() {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}

	$sql = "SELECT SUM(JJ_sales) AS jj_total FROM f32ee.javajam_sales;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total sales for JJ: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Just Java Endless cup: $" . $row["jj_total"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(CALS_sales) AS cals_total FROM f32ee.javajam_sales;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total sales for CALS: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Cafe au Lait Single: $" . $row["cals_total"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(CALD_sales) AS cald_total FROM f32ee.javajam_sales;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total sales for CALD: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Cafe au Lait Double: $" . $row["cald_total"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(ICS_sales) AS ics_total FROM f32ee.javajam_sales;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total sales for ICS: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Iced Cappuccino Single: $" . $row["ics_total"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(ICD_sales) AS icd_total FROM f32ee.javajam_sales;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total sales for ICD: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Iced Cappuccino Double: $" . $row["icd_total"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$salesLink = "<a href='../../CaseStudy_4_Final/sales.php'>Return</a>";
	echo "<br>$salesLink";
	header("url=../../CaseStudy_4_Final/sales.php");

	return;
}

function quantsales() {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT SUM(JJ_orders) AS jj_qty FROM f32ee.javajam_orders;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total orders for JJ: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Just Java Endless cup: " . $row["jj_qty"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(CALS_orders) AS cals_qty FROM f32ee.javajam_orders;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total orders for CALS: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Cafe au Lait Single: " . $row["cals_qty"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(CALD_orders) AS cald_qty FROM f32ee.javajam_orders;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total orders for CALD: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Cafe au Lait Double: " . $row["cald_qty"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(ICS_orders) AS ics_qty FROM f32ee.javajam_orders;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total orders for ICS: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Iced Cappuccino Single: " . $row["ics_qty"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT SUM(ICD_orders) AS icd_qty FROM f32ee.javajam_orders;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get total orders for ICD: " . mysqli_error($conn);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Iced Cappuccino Double: " . $row["icd_qty"] ."<br>";
		}
	} else {
		echo "0 results";
	}

	$salesLink = "<a href='../../CaseStudy_4_Final/sales.php'>Return</a>";
	echo "<br>$salesLink";
	header("url=../../CaseStudy_4_Final/sales.php");

	return;

}

?>
