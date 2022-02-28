<h1>Create a new User</h1>

<?php $form = \app\core\form\Form::begin('', "post") ?>
 <div class="row">
   <div class="col"> <?php echo $form->field($model, 'firstname')?></div>
   <div class="col">  <?php echo $form->field($model, 'lastname')?></div>
 </div>
  <?php echo $form->field($model, 'email')->passwordEmail()?>
  <?php echo $form->field($model, 'password')->passwordField()?>
  <?php echo $form->field($model, 'passwordconfirm')->passwordField()?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo \app\core\form\Form::end() ?>
