<table>
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
   <td><a href="" class="fname" data-name="fname" data-type="text" data-pk="<?= $row['id']?>" data-url="index.php?/Contacts/EditField/" data-title="Enter First Name"><?= $row['fname']?></td></a>
   <td><a href="" class="lname" data-name="lname" data-type="text" data-pk="<?= $row['id']?>" data-url="index.php?/Contacts/EditField/" data-title="Enter Last Name"><?= $row['lname']?></td></a>
   <td><a href="" class="phone" data-name="phone" data-type="text" data-pk="<?= $row['id']?>" data-url="index.php?/Contacts/EditField/" data-title="Enter Phone"><?= $row['phone']?></td></a>
   <td><a href="" class="email" data-name="email" data-type="text" data-pk="<?= $row['id']?>" data-url="index.php?/Contacts/EditField/" data-title="Enter Email"><?= $row['email']?></td></a>
 </tr>
<? } ?>
</table>
