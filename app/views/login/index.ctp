<?php echo $this->Html->image('login.png',array('class' => 'imgicon')) ; ?>
<h1 class="h1icon">  
	Log In
</h1>
<div class="clearicon"></div>
<fieldset class="datafields">
<?php
echo $this->Form->create(null, array('action' => 'authenticate'));
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('Log in');
?>
</fieldset>
