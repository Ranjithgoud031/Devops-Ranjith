public class sub {
    // Method to subtract two numbers
    public int subtract(int a, int b) {
        return a - b;
    }

    public static void main(String[] args) {
        // Create an object of the Subtraction class
        Subtraction sub = new Subtraction();
        
        // Define two numbers
        int num1 = 50;
        int num2 = 30;
        
        // Call the subtract method and print the result
        int result = sub.subtract(num1, num2);
        System.out.println("The result of subtraction is: " + result);
    }
}