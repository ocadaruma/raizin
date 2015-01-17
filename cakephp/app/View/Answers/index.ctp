<p>anc</p>
<p>この中から自分でも一番腹がたったものを選びなさい</p>
<?php
echo $this->Form->create(null, array(
  'url' => array('controller' => 'results', 'action' => 'index')
));
?>
<?php echo $this->Form->hidden('q1'); ?>
<?php echo $this->Form->hidden('q2'); ?>
<?php echo $this->Form->hidden('q3'); ?>
<?php echo $this->Form->hidden('q4'); ?>
<?php echo $this->Form->hidden('q5'); ?>
<?php echo $this->Form->submit($q1, array('name' => 'submit1')); ?>
<?php echo $this->Form->submit($q2, array('name' => 'submit2')); ?>
<?php echo $this->Form->submit($q3, array('name' => 'submit3')); ?>
<?php echo $this->Form->submit($q4, array('name' => 'submit4')); ?>
<?php echo $this->Form->submit($q5, array('name' => 'submit5')); ?>
<?php echo $this->Form->end(); ?>
