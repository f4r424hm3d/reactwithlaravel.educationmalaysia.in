<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width" />

  <style>
    .pink-btn {
      font-weight: bold;
      background: #e74e84;
      color: #fff;
      align-items: center;
      padding: 12px 25px;
      font-size: 15px;
      border-radius: 4px;
      border: 0px
    }

    .pink-btn a {
      color: #fff;
      text-decoration: none
    }

    .pink-btn:hover {
      background: #3f4079;
    }

    .blue-btn {
      font-weight: bold;
      background: #3f4079;
      color: #fff;
      align-items: center;
      padding: 12px 25px;
      font-size: 15px;
      border-radius: 4px;
      border: 0px
    }

    .blue-btn a {
      color: #fff;
      text-decoration: none
    }

    .blue-btn:hover {
      background: #e74e84;
    }
  </style>
</head>

<body
  style="width:100%;height:100%;background:#efefef;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;color:#3E3E3E;font-family:Helvetica, Arial, sans-serif;line-height:1.65;margin:0;padding:0;">
  <table border="0" cellpadding="0" cellspacing="0"
    style="width:100%;background:#efefef;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;color:#3E3E3E;font-family:Helvetica, Arial, sans-serif;line-height:1.65;margin:0;padding:0;">
    <tr>
      <td valign="top" style="display:block;clear:both;margin:0 auto;max-width:580px;">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;border-collapse:collapse;">
          <tr>
            <td valign="top" align="center" class="masthead"
              style="padding:20px 0px 5px 0px;background:#3f4079;color:white;">
              <h1 style="font-size:32px;margin:0 auto;max-width:90%;line-height:1.25;">
                <a href="<?php echo e(url('/')); ?>" target="_blank" rel="noopener noreferrer"
                  style="text-decoration:none;color:#ffffff;"><?php echo e(config('app.name')); ?></a>
                <p style="margin-bottom:0;line-height:12px;font-weight:normal;margin-top:15px;font-size:18px;"></p>
              </h1>
            </td>
          </tr>
          <tr>
            <td valign="top" class="content" style="background:white;padding:25px;">
              <p style="text-align: justify;">
                Hi Team,<br><br>
                <strong>New Inquiry from <?php echo e(config('app.name')); ?></strong><br><br>
              <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $emailData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li><strong><?php echo e(ucwords(str_replace('_', ' ', $key))); ?>:</strong> <?php echo e($value); ?></li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </ul>
              <br>
              Please review and follow up as needed.<br>
              Best regards,<br>
              <strong><?php echo e(config('app.name')); ?> Team</strong>
              </p>

            </td>
          </tr>
          <tr>
            <td valign="top" align="center" class="masthead" style="padding:20px 0;background:#e74e84;color:white;">
              <h1 style="font-size:32px;margin:0 auto;max-width:90%;line-height:1.25;">
              </h1>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\mails\inquiry-mail-to-team-2.blade.php ENDPATH**/ ?>