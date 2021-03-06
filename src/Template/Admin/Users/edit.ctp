<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form">
<?php echo $this->Form->create($user);?>
	<fieldset>
 		<legend><?php echo __('Edit {0}', __('User'));?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('active');
		echo $this->Form->input('role_id');
		echo $this->Form->input('pwd');
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit')); echo $this->Form->end();?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $this->Form->value('User.id')], ['confirm' => __('Are you sure you want to delete # {0}?', $this->Form->value('User.id'))]); ?></li>
		<li><?php echo $this->Html->link(__('List {0}', __('Users')), ['action' => 'index']);?></li>
	</ul>
</div>
