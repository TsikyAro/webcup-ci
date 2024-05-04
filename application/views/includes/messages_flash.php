<?php if ($this->session->flashdata('message')): ?>
<div class="warning">
    <?php echo $this->session->flashdata('message'); ?>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
<div class="success">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>