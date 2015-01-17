<p>index3</p>

<?php echo $this->Form->create('tops',array('action'=>'index4')); ?>
<?php echo $this->Form->input('q3',array('label' => '質問３だよーー')); ?>
<?php echo $this->Form->hidden('q1'); ?>
<?php echo $this->Form->hidden('q2'); ?>
<?php echo $this->Form->end("次へ"); ?>
