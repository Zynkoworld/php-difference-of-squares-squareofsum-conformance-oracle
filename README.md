# zynko-oracle · `php-difference-of-squares-squareofsum-conformance-oracle`

**A deterministic, re-checkable conformance oracle for `difference-of-squares` (php).**

## Proven
Measured on the canonical Exercism corpus — **3 input/output pairs, 3 distinct outputs** — produced by *running* the reference in a sealed sandbox, not asserted.

## Scope (declared)
The corpus is the canonical Exercism test data for `difference-of-squares`. Inputs outside that set are **not covered**; this oracle decides agreement on the published corpus only and makes no claim of general correctness.

## Provenance
Reference: the Exercism reference solution for `difference-of-squares` (php; MIT, Exercism), body unchanged. Proven by the exercism testsuite (pin=948c6ee28508d3f8), re-executed by harvest in a sealed sandbox (unshare -rn) before this bundle was generated.

## License
Apache-2.0 for the scaffolding; the reference body retains its upstream MIT (Exercism) license.
