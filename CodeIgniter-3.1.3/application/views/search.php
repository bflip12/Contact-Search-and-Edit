<h2>Search</h2>
<br />

<input type="text" name="txtSearch" id="txtSearch" />
<br />
<br />

<table id = "tbFull">
 <tr>
 <th>ID</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Phone Number</th>
 <th>E-mail</th>
 </tr>
<? foreach ($listing as $row) { ?>
 <tr>
   <td><?= $row['id']?></td>
   <td><?= $row['fname']?></td>
   <td><?= $row['lname']?></td>
   <td><?= $row['phone']?></td>
   <td><?= $row['email']?></td>
 </tr>
<? } ?>
</table>


<table id="tbListing">
</table>

<br />
