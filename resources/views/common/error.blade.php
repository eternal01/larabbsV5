<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2018/6/8
 * Time: 18:14
 */
?>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <h4>有错误发生：</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
