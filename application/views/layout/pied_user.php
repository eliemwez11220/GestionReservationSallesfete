
<?php
if (isset($this->session->role_utilisateur))
    {
    foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; 
    }
?>