class Main {
    public static void main(String[] args) {
        System.out.println("hola mundo");
        Car car = new Car("AMQ123", new Account("Marco Narvaez", "MN123"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("QWE567", new Account("Andres Herrera", "AND1458"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}