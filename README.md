# Livewire Redirect Back Readonly Bug

Git repo of https://github.com/livewire/livewire/issues/2603 

### Description of bug

When navigating back in the browser after doing an action which causes a redirect, forms are no longer editable. When inspecting the DOM, a  `readonly=""` attribute remains on the input element. Only a full page refresh (as expected) fixes this.

### Expected

After navigating back, the input field should be editable.

### Reproduction Steps

1. Go to `/`.
2. Enter a value in the input field and click submit.
3. After being redirected to the new page, click the back button in your browser.
4. See your original input value in the input field. The input field is not editable.

### Context

- Livewire version: v2.4.0
- Laravel version: v8.31.0
- Alpine version: N/A
- Browser: Chrome, Firefox, Safari
