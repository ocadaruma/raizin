<p>index4</p>

<?php echo $this->Form->create('tops',array('action'=>'index5')); ?>
<?php echo $this->Form->input('q4',array('label' => '質問４だよーー')); ?>
<?php echo $this->Form->hidden('q1'); ?>
<?php echo $this->Form->hidden('q2'); ?>
<?php echo $this->Form->hidden('q3'); ?>
<?php echo $this->Form->end("次へ"); ?>
