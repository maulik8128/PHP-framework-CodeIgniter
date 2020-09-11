<h2>Register </h2>

<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('users/register', $attributes); ?>


<div class="form-group">

    <?php echo form_label('First Name'); ?>
    <?php
$data = array(
    'class' => 'form-control',
    'name' => 'first_name',
    'placeholder' => 'Enter Your first_name',
);

?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Last Name'); ?>
    <?php
$data = array(
    'class' => 'form-control',
    'name' => 'last_name',
    'placeholder' => 'Enter Your last_name',
);

?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Email'); ?>
    <?php
$data = array(
    'class' => 'form-control',
    'name' => 'email',
    'placeholder' => 'Enter Your email',
    'type' => 'email'
);

?>


    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Username'); ?>
    <?php
$data = array(
    'class' => 'form-control',
    'name' => 'username',
    'placeholder' => 'Enter Your username',
);

?>

    <?php echo form_input($data); ?>


</div>


<div class="form-group">

    <?php echo form_label('Password'); ?>
    <?php
$data = array(
    'class' => 'form-control',
    'name' => 'password',
    'placeholder' => 'Enter Your password',
);

?>

    <?php echo form_password($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Confirm Password'); ?>
    <?php
$data = array(
    'class' => 'form-control',
    'name' => 'confirm_password',
    'placeholder' => 'Confirm password',
);

?>

    <?php echo form_password($data); ?>


</div>


<div class="form-group">

    <?php
$data = array(
    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Register',
);

?>

    <?php echo form_submit($data); ?>


</div>



<?php echo form_close(); ?>
