<?php
$xml = new SimpleXMLElement('http://127.0.0.1:8000/detail/2', 0, TRUE);
?>

echo('<pre>');
var_dump($xml);

echo('</pre>');

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>

<?php
?>
  </tbody>
</table>