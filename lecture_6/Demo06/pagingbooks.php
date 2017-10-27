<?php
require 'DataProvider.php';

// Cau hinh cac tham so phan trang
// so dong tren 1 trang
$rowsPerPage = 2;

// mac dinh hien thi trang 1
$pageNum = 1;

// neu co tham so $_GET['page'] thi su dung no la trang hien thi
if(isset($_GET['page']))
{
    $pageNum = $_GET['page'];
}

// dem chi so cua mau tin dau tien
$offset = ($pageNum - 1) * $rowsPerPage;
$sql = "SELECT * FROM T_BOOK" .
		" LIMIT $offset, $rowsPerPage";
$result = DataProvider::executeQuery($sql);

// Hien thi ket qua
echo '<table width="600" align="center" border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111">';
   echo "<tr>";
   echo "<th>STT</th>";
   echo "<th>Tựa sách</th>";   	   
   echo "<th>Mô tả</th>";
   echo "<th>Tác giả</th>";
   echo "<th>NXB</th>";
   echo "<th>Đơn giá</th>";   
   echo "<th>Ảnh bìa</th>";
   echo "</tr>";
   $i = 1;
   while ($row = mysql_fetch_array($result))
   {
   	    echo "<tr>";
   	   	echo "<td>" . $i . "</td>";
   	   	echo "<td>" . $row['BOOK_TITLE'] . "</td>";
   	   	echo "<td>" . $row['BOOK_DESC'] . "</td>";
   	   	echo "<td>" . $row['BOOK_AUTHOR'] . "</td>";
   	   	echo "<td>" . $row['BOOK_YEAR'] . "</td>";
   	   	echo "<td>" . $row['BOOK_PRICE'] . "</td>";
		echo "<td><img src='images/" . $row["BOOK_PIC"] . "'></td>";
      	echo "</tr>";
      	
      	$i++;
   }
   echo "</table>";

// dem so mau tin co trong CSDL
$sql   = "SELECT COUNT(*) AS numrows FROM T_BOOK";
$result = DataProvider::executeQuery($sql);
$row     = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];

// tinh tong so trang se hien thi
$maxPage = ceil($numrows/$rowsPerPage);

// hien thi lien ket den tung trang
$self = "pagingbooks.php";
$nav  = '';

for($page = 1; $page <= $maxPage; $page++)
{
   if ($page == $pageNum)
   {
      $nav .= " $page "; // khong can tao link cho trang hien hanh
   }
   else
   {
      $nav .= " <a href=\"$self?page=$page\">$page</a> ";
   }
}

// tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
if ($pageNum > 1)
{
   $page  = $pageNum - 1;
   $prev  = " <a href=\"$self?page=$page\">[Trang trước]</a> ";

   $first = " <a href=\"$self?page=1\">[Trang đầu]</a> ";
}
else
{
   $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
   $first = '&nbsp;'; // va lien ket trang dau
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;
   $next = " <a href=\"$self?page=$page\">[Trang kế]</a> ";

   $last = " <a href=\"$self?page=$maxPage\">[Trang cuối]</a> ";
}
else
{
   $next = '&nbsp;'; // dang o trang cuoi, khong can in lien ket trang ke
   $last = '&nbsp;'; // va lien ket trang cuoi
}

// hien thi cac link lien ket trang
echo "<center>". $first . $prev . $nav . $next . $last . "</center>";


?>