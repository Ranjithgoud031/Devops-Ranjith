# Function to dynamically generate variables and perform an operation
def dynamic_variable_sum(n):
    # Dictionary to hold dynamic variables
    dynamic_vars = {}

    # Dynamically creating variables and assigning values
    for i in range(1, n+1):
        var_name = f"var_{i}"
        dynamic_vars[var_name] = i * 10  # Assigning values (e.g., multiples of 10)

    # Summing all dynamic variables
    total_sum = sum(dynamic_vars.values())

    # Displaying each dynamic variable and its value
    print("Dynamic Variables:")
    for var, value in dynamic_vars.items():
        print(f"{var} = {value}")

    return total_sum

# User input to define the number of variables
num_of_vars = int(input("Enter the number of dynamic variables to create: "))

# Calculating the sum of the dynamically generated variables
result = dynamic_variable_sum(num_of_vars)

# Displaying the result
print(f"The sum of all dynamic variables is: {result}")
