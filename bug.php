function foo(array $arr): array {
  foreach ($arr as $value) {
    if (is_string($value)) {
        $result[] = strtoupper($value);
    } elseif (is_int($value)) {
        $result[] = $value * 2;
    }
  }
  return $result; // Notice: Undefined variable: result
}