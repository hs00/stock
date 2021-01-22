<?php

// show js alert with message
function jsAlert(string $comment): string
{
  return "
    <script>
      alert('{$comment}');
    </script>
  ";
}

function goPage(string $href): string
{
  return "
    <script>
      location.href='{$href}'
    </script>
   ";
}
