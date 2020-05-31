<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
<h3> Interface VS Abstract Classes</h3>
    <div class="row">
   
    <div class="col-md-6">
        
        <ul>
            <li>
                Interface Support Multiple Implementations. 
            </li>
            <li>
                Interface does not contain data member. 
            </li>
            <li>
                Interface does not contain Constructor.
            </li>
            <li>
                An Interface Containers only Signature of Member.
            </li>
            <li>
                An Interface cannot have access modifiers by default everything is assumed as public.
            </li>
            <li>
                Member of Interface can not be Static.
            </li>
        </ul>
    </div>
    <div class="col-md-6">
        <ul>
            <li>
                Abstract Class does not support multiple inheritance.
            </li>
            <li>
                Abstract class contains Data Member.
            </li>
            <li>
                Abstract class contains Constructors.
            </li>
            <li>
                An abstract class Contains both incomplete and complete member.
            </li>
            <li>
                An abstract class can contain access modifiers.
            </li>
            <li>
                Only Complete Member of abstract class can be Static. 
            </li>
        </ul>
    </div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
