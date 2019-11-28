# DomaiNesia Backend Hiring Test
Hello, my name Faiz, DomaiNesia's backend developer. I love clean and humanly concise, working code. I hope that you all express your very best in this simple evaluation.

To get started, please fork this repository https://github.com/milcery/b2019001. The repo is place for both the quests (README.md) and your answers (ANSWER.md).

## Quests
Suppose we want to build a domain purchase system.

### 1. Order Data Processing
First step, we need to create a simple CLI app. This app can receive domain orders in batch. To use the app, customer will call the program and input several domain names.

For example,
```
$ php domainesia-cli.php
tokosaya.com
meraihcinta.id
buatapakerja.co.id
hellodisanayo.cao
jualsardenkalengan.com
```

The input given by customer can be anything. So remember to filter the domain name 
(rules given below). Additionally, you may add more restriction to avoid program crash.

After taking valid domain names, our system will output a simple CLI invoice 
with domain list grouped by its extension, alphabetically sort by its extension, 
and then alphabetically sort by its name.

```
# INVOICE

buatapakerja.co.id               99.000
jualsardenkalengan.com           99.000
tokosaya.com                     99.000
meraihcinta.id                  249.000
---------------------------------------- +
TOTAL                        Rp 546.000
```

#### More specification
- Domain ext prices: .com 99000, .net 119000, .org 129000, .space 28000, .co 419000, .id 249000, .co.id 99000. No other extension provided.
- Mimic domain name format & validity according to https://www.domainesia.com/pesan&q=domain/.
- To determine available domain, please use `lib/DomainWhois.php`.
- Invalid and unavailable domain must be filtered out.

- Use provided template and you modify it as you see it fit.
- We encourage you to make commits along the way.
- We give more score if you use Test Driven Development (TDD) or at least accompany the code with runnable tests. A `spec/` folder has been prepared for you.

### 2. Git Decision
Please git-commit your result into this repository (on `master` branch).

For preparation for the live test, please take a look at `feature/webapi` branch.
Your task is to incorporate your changes in `master` into `feature/webapi`.
Afterward, please write what you've done in [ANSWER.md](./ANSWER.md).

### 3. Short Quiz
Short quiz, short answer.

- What is the different between session and cookie?
- What is the different between cURL in PHP and curl in command line?
- Why we don't use YAML as HTTP response?

### 4. Tell us.
Have you ever implemented something new in your project? It is either new to you 
or your company or even this world. Tell us that implementation story, 
from a bit of background, process, and that new things along with its impact. 
Please tell us as if we're an IT executive, know some IT but not that specific.
