## Design Patterns - SOLID

SOLID são cinco princípios da programação orientada a objetos que facilitam no desenvolvimento de softwares, tornando-os fáceis de manter e entender.

<ul>
    <li> S — Single Responsiblity Principle (Princípio da responsabilidade única)</li>
    <li> O — Open-Closed Principle (Princípio Aberto-Fechado)</li>
    <li> L — Liskov Substitution Principle (Princípio da substituição de Liskov)</li>
    <li> I — Interface Segregation Principle (Princípio da Segregação da Interface)</li>
    <li> D — Dependency Inversion Principle (Princípio da inversão da dependência)</li>
</ul>
           
### 1. SRP — Single Responsibility Principle:
Princípio da Responsabilidade Única — Uma classe deve ter um, e somente um, motivo para mudar.

- [SRP: Exemplo ruim - 1-SRP-example.php](01-SRP-bad-example-god-class.php)
- [SRP: Exemplo bom - 2-SRP-good-example](02-SRP-good-example.php)

O princípio da responsabilidade única não se limita somente a classes, ele também pode ser aplicado em métodos e funções, ou seja, tudo que é responsável por executar uma ação, deve ser responsável por apenas aquilo que se propõe a fazer.

- [SRP: Exemplo em funções](03-SRP-function-example.php)

Aplicando esse princípio, automaticamente você estará escrevendo um código mais limpo e de fácil manutenção! Se você tem interesse nesse assunto:

- [Boas práticas - Clean Code](0.1-Clean-code.md)

### 2. OCP — Single Responsibility Principle:

Princípio Aberto-Fechado — Objetos ou entidades devem estar abertos para extensão, mas fechados para modificação.

- [OCP: Exemplo ruim - 4-OCP-bad-example.php](04-OCP-bad-example.php)
- [OCP: Exemplo bom - 5-OCP-good-example.php](05-OCP-good-example.php)

### 3. LSP — Liskov Substitution Principle:

Princípio da substituição de Liskov — Uma classe derivada deve ser substituível por sua classe base.

- [LSP: Exemplo ruim - 6-LSP-bad-example.php](06-LSP-bad-example.php)
- [LSP: Exemplo bom - 7-LSP-good-example.php](07-LSP-good-example.php)

### 4. ISP — Interface Segregation Principle:

Princípio da Segregação da Interface — Uma classe não deve ser forçada a implementar interfaces e métodos que não irão utilizar.

- [ISP: Exemplo ruim - 8-ISP-bad.example.php](08-ISP-bad.example.php)
- [ISP: Exemplo bom - 9-ISP-good-example.php](09-ISP-good-example.php)

### 5. DIP — Dependency Inversion Principle:

Princípio da Inversão de Dependência — Dependa de abstrações e não de implementações.

- [DIP: Exemplo ruim parte 1 - 10-DIP-bad-example-1.php](10-DIP-bad-example-1.php)
- [DIP: Exemplo ruim parte 2 - 10-DIP-bad-example-1.php](11-DIP-bad-example-2.php)
- [DIP: Exemplo bom - 12-DIP-good-example.php](12-DIP-good-example.php)
