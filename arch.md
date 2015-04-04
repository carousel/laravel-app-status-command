#CATALOG OF PATTERNS OF ENTERPRISE APPLICATION ARCHITECTURE

##Domain logic patterns
    -Transaction scripts(110)
    -Domain Model(116)
    -Table Module(125)
    -Service Layer(133)

##Data Source
    -Table Data Gateway(144)
    -Row Data Gateway(152)
    -Active Record(160)
    -Data Mapper(165)

##Object Relational Behavioral Patterns
    -Unit of Work(184)
    -Identitiy Map(195)
    -Lazy Load(200)

##Object Relational Structural Patterns
    -Identity Field(216)
    -Foreign Key Mapping(236)
    -Association Table Mapping(248)
    -Dependent Mapping(262)
    -Embedded Value(268)
    -Serialized LOB(272)
    -Single Table Inheritance(293)
    -Inheritance Mappers(302)


##Object Relational Metadata Mapping Patterns
    -Metadata Mapping(306)
    -Query Object(316)
    -Repository(322)

##Web Presentation Patterns
    -Model View Controller(330)
    -Page Controller(333)
    -Front Controller(344)
    -Template View(350)
    -Transform View(361)
    -Two-Step View(365)
    -Application Controller(379)

##Distribution Patterns
    -Remote Facade(388)
    -Data Transfer Object(401)

##Offline Concurrency Patterns
    -Optimistic Offline Lock(416)
    -Pessimistic Offline Lock(426)
    -Coarse Grained Lock(438)
    -Implicit Lock(449)

##Sesion State Patterns
    -Client Session State(456)
    -Server Session State(458)
    -Database Session State(462)

##Base Patterns
    -Gateway(466)
    -Mapper(473)
    -Layer Supertype(475)
    -Separated Interface(476)
    -Registry(480)
    -Value Object(486)
    -Money(488)
    -Special Case(496)
    -Plugin(499)
    -Service Stub(504)
    -Record Set(508)

#OOP(a pie )

#SOLID
    - Single Responsibility Principle (focus)
    - Open-Close (public)
    - Liskov (type)
    - Interface Segregation (limited interface)
    - Dependency Injection (don't call us we will call you)

#DESIGN PATTERNS
    
##Creational
    -Abstract Factory (factory definition first, family of related objects)
        - abstract what is common for all classes
        - client calls concrete class
    -Factory Method (without family)
    -Builder (build complex object in steps with common instructions)
    -Prototype (__clone to other slot of memory,delegation)
    -Singleton (class has only one instance, with global point of access)

##Structural(compositional)
    -Adapter (convert interface into one that clients expect/different interface)
    -Bridge (decouple an abstraction from implementation/orthogonal)
    -Composite (composite/leaf, recursive composition)
    -Decorator (decorate object at run-time)
    -Facade (higher level interface)
    -Flyweight (sharing expensive resources)
    -Proxy (surrogate for another object/same interface)

##Bahavioral(decompositional)
    -Iterator (access aggregate object without internals)
    ###SENDER/RECEIVER
        -Observer (dependency changes state/decoupled interface)
        -Mediator (encapsulates communication between objects)
        -Command (execute command on receiver/send request)
        -Chain (multiple handlers for request/next)
    -Memento (capture objects internal state/for restoring state)
    -State (change behaviour depend on state)
    -Strategy (interchangeable algorithms)
    -Template Method (algorithm skeleton in a base class)
    -Visitor (define new operation without changing classes/recursive structure)
    -Interpreter


#CONCEPT OF CLIENT?

#WEB FRAMEWORKS SPECIFIC ARCH PATTERNS
    -MVC
        -separation of concerns
    -ROUTER
    -DEPENDENCY INJECTION
        -inversion of control
    -FRONT CONTROLLER
        -centralized point for handling request
    -EVENT DRIVEN (OBSERVER) 
        -hook on events (switch)
    -DOMAIN MODEL
        -encapsulates domain problem
    -ORM,ACTIVE RECORD
        -maps object to db 
    -SERVER SESSION,CACHING,AUTH,VALIDATION,TEMPLATE,
