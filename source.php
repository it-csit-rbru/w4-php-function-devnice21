<?php
$url_array = array(
    array("http://stu2.rbru.ac.th/~s9015261001","Jason Bourne"),
    array("http://stu2.rbru.ac.th/~s9015261002","James Bond"),
    array("http://stu2.rbru.ac.th/~s9015261003","John Clark"),
    array("http://stu2.rbru.ac.th/~s9015261004","Jack Reacher"),
    array("http://stu2.rbru.ac.th/~s9015261005","Johny English")
);
function create_link($u,$t){
    return "<a href=\"$u\">$t</a>";
}
function create_table($t){
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>URL</th>';
    echo '<th>Name</th>';
    echo '<tr>';
    echo '<thead>';
    echo '<tbody>';
    for($i=0;$i<sizeof($t);$i++){
        echo '<tr>';
        for($j=0;$j<sizeof($t[$i]);$j++){ 
            echo '<td>'.$t[$i][$j].'</td>';
        }    
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

?>